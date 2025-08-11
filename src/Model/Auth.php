<?php

namespace App\Model;

use App\Helpers\FlashMessage;
use App\Helpers\Mail\Mail;
use App\Helpers\Mail\PhpMailSender;
use Delight\Auth\InvalidEmailException;
use Delight\Auth\InvalidPasswordException;
use Delight\Auth\TooManyRequestsException;
use Delight\Auth\UserAlreadyExistsException;
use Exception;
use Pimple\Container;

class Auth
{
    /**
     * Регистрирует пользователя и создает профиль
     *
     * @param array $userData Данные пользователя
     * @throws Exception Если регистрация не удалась
     */
    public function register(Container $container, array $userData): ?int
    {
        try{
            $container['db']->beginTransaction();

            $userId = $container['auth']->register($_POST['email'], $_POST['password'], null, function ($selector, $token) use($userData, $container) {
                $link = $container['config']['init']['PATH'] . '/auth/verify_email?selector=' . \urlencode($selector).'&token='.\urlencode($token);
                $sender = new PhpMailSender();
                $mail = new Mail($sender, $container['twig']);
                $mail->setTo($userData['email'])
                    ->setSubject('Регистрация на сайте')
                    ->setBodyFromTemplate('mail/welcome.html.twig', [
                        'email' => $userData['email'],
                        'link' => $link
                    ])
                    ->send();
            });
            if(!$userId){
                $container['db']->rollBack();
                return null;
            }

            $repository = new ProfileRepository($container['db']);
            if(!$repository->setProfile($userId)){
                $container['db']->rollBack();
                return null;
            }

            $container['db']->commit();
            return $userId;

        } catch (
        \Delight\Auth\InvalidEmailException |
        \Delight\Auth\InvalidPasswordException|
        \Delight\Auth\TooManyRequestsException|
        \Delight\Auth\UserAlreadyExistsException
            $e
        ) {
            if ($container['db']->inTransaction()) {
                $container['db']->rollBack();
            }
            throw $e;
        } catch (\Exception $e){
            if($container['db']->inTransaction()){
                $container['db']->rollBack();

            }
            return null;
        }
    }

    /**
     * @throws InvalidEmailException
     * @throws TooManyRequestsException
     * @throws UserAlreadyExistsException
     * @throws InvalidPasswordException
     */
    public function oauth_register(Container $container, string $email): ?int
    {
        try{
            $container['db']->beginTransaction();
            $password = bin2hex(random_bytes(4));
            $userId = $container['auth']->admin()->createUser($email, $password, null);
            if(!$userId){
                $container['db']->rollBack();
                return null;
            }
            $repository = new ProfileRepository($container['db']);
            if(!$repository->setProfile($userId)){
                $container['db']->rollBack();
                return null;
            }
            $sender = new PhpMailSender();
            $mail = new Mail($sender, $container['twig']);
            $mail->setTo($email)
                ->setSubject('Регистрация на сайте')
                ->setBodyFromTemplate('mail/welcome_oauth.html.twig', [
                    'email' => $email,
                    'password' => $password
                ])
                ->send();

            $container['db']->commit();
            return $userId;
        }catch (
            \Delight\Auth\InvalidEmailException |
            \Delight\Auth\InvalidPasswordException|
            \Delight\Auth\TooManyRequestsException|
            \Delight\Auth\UserAlreadyExistsException
                $e
        ){
            if ($container['db']->inTransaction()) {
                $container['db']->rollBack();
            }
            throw $e;
        }catch(\Exception $e){
            if($container['db']->inTransaction()){
                $container['db']->rollBack();

            }
            return null;
        }
    }
}
