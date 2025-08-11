<?php

namespace App\Controllers;

use App\Helpers\FlashMessage;
use App\Helpers\Mail\Mail;
use App\Helpers\Mail\PhpMailSender;
use App\Helpers\Telegram;
use App\Helpers\UserValidator;
use App\Model\Auth;
use App\Model\AuthRepository;
use App\Model\ProfileRepository;
use Random\RandomException;

class AuthController extends AbstractController
{
    public function loginForm(): void
    {
        if($this->container['auth']->isLoggedIn()){
            header('Location: /cabinet', 301);
            exit;
        }
        if (isset($_GET['redirect_to'])) {
            $_SESSION['redirect_to'] = $_GET['redirect_to'];
        }
        $user_email = $_SESSION['user']['email'] ?? null;
        $this->render('auth/login.twig', ['user_email' => $user_email]);
        unset($_SESSION['user']);
    }
    public function signIn(): void
    {
        if (!empty($_POST)) {
            try {
                $userData = $_POST;
                if(isset($userData['popup'])){
                    $popup = filter_var($userData['popup'], FILTER_SANITIZE_NUMBER_INT);
                    if($popup){
                        $_SESSION['redirect_to'] = $_SERVER['HTTP_REFERER'];
                    }
                }
                $errors = UserValidator::ValidateLoginData($userData);
                if(!empty($errors)){
                    foreach ($errors as $error){
                        FlashMessage::add('warning', $error);
                    }
                    header('Location: /auth/login', 301);
                    exit();
                }
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
                $remember = filter_input(INPUT_POST, 'remember_me', FILTER_VALIDATE_BOOLEAN);

                if($remember){
                    $rememberDuration = (int) (60 * 60 * 24 * 365.25);
                }else{
                    $rememberDuration = null;
                }
                if ($email && $password) {
                    $this->container['auth']->login($email, $password, $rememberDuration);
                    $redirectUrl = $_SESSION['redirect_to'] ?? '/cabinet';
                    $allowedHost = $this->container['config']['init']['HOST'];
                    $parsedUrl = parse_url($redirectUrl);
                    if (isset($parsedUrl['host']) && $parsedUrl['host'] !== $allowedHost) {
                        $redirectUrl = '/cabinet'; // Редирект на страницу по умолчанию
                    }
                    FlashMessage::add('success', 'Вы успешно вошли в личный кабинет.');
                    unset($_SESSION['redirect_to']); // Очищаем сохраненный URL
                    header('Location: ' . $redirectUrl, 301);
                    exit();
                }
            } catch (\Delight\Auth\InvalidEmailException $e) {
                FlashMessage::add('warning', 'Неправильный email.');
            } catch (\Delight\Auth\InvalidPasswordException $e) {
                FlashMessage::add('warning', 'Неправильный пароль.');
            } catch (\Delight\Auth\EmailNotVerifiedException $e) {
                FlashMessage::add('warning', 'Email не подтвержден');
            } catch (\Delight\Auth\TooManyRequestsException $e) {
                FlashMessage::add('warning', 'Слишком много запросов');
            }
            header("Location: /auth/login");
            exit();
        }
    }
    public function registerForm(): void
    {
        $user_email = $_SESSION['user']['email'] ?? null;
        $this->render('auth/register.twig', ['user_email' => $user_email]);
        unset($_SESSION['user']);
    }

    public function signUp(): void
    {
        if(!empty($_POST)) {
            try{
                $userData = $_POST;
                $errors = UserValidator::validateRegisterData($userData);

                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        FlashMessage::add('warning', $error);
                    }
                    $_SESSION['user']['email'] = $userData['email'];
                    header('Location: /auth/register', 301);
                    exit();
                }
                $auth = new Auth();
                $userId = $auth->register($this->container, $userData);
                if(!$userId){
                    FlashMessage::add('warning', 'Произошла ошибка при регистрации');
                    header('Location: /auth/register', 301);
                }else{
                    FlashMessage::add('success', 'На ваш Email отправлено письмо с подтверждением.');
                    header('Location: /auth/login');
                }
                exit();
            }catch (\Delight\Auth\InvalidEmailException $e) {
                FlashMessage::add('warning', 'Некорректный email адрес.');
            } catch (\Delight\Auth\InvalidPasswordException $e) {
                FlashMessage::add('warning', 'Некорректный пароль.');
            } catch (\Delight\Auth\UserAlreadyExistsException $e) {
                FlashMessage::add('warning', 'Пользователь с таким email уже зарегистрирован.');
            } catch (\Delight\Auth\TooManyRequestsException $e) {
                FlashMessage::add('warning', 'Слишком много запросов. Пожалуйста попробуйте позже.');
            } catch (\Exception $e) {
                // Сюда попадут все остальные исключения (не связанные с Auth)
                FlashMessage::add('danger', 'Произошла непредвиденная ошибка');

            }
            header('Location: /auth/register', 301);
            exit();
        }
    }

    public function verifyEmail(): void
    {
        try {
            $this->container['auth']->confirmEmail($_GET['selector'], $_GET['token']);
            FlashMessage::add('success', 'Email успешно подтвержден!');

        }catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
            FlashMessage::add('warning', 'Invalid token');
        }
        catch (\Delight\Auth\TokenExpiredException $e) {
            FlashMessage::add('warning', 'Token expired');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            FlashMessage::add('warning', 'Email address already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            FlashMessage::add('warning', 'Too many requests');
        }
        header('Location: /auth/login');
        exit();
    }

    public function logOut(): void
    {
        $this->container['auth']->logOut();
        header('Location: /auth/login', 301);
        exit;
    }

    public function resetPasswordForm(): void
    {
        $this->render('auth/reset_password.twig');
    }

    public function resetPassword(): void
    {
        if(!empty($_POST)) {
            $userData = $_POST;
            $errors = UserValidator::ValidateResetPasswordData($userData);
            if(!empty($errors)){
                foreach ($errors as $error){
                    FlashMessage::add('warning', $error);
                }
                header('Location: /auth/reset', 301);
                exit();
            }
            try{

                $this->container['auth']->forgotPassword($userData['email'], function ($selector, $token) use($userData){
                    $link = $this->container['config']['init']['PATH'] . '/auth/reset_password?selector=' . \urlencode($selector).'&token='.\urlencode($token);
                    $sender = new PhpMailSender();
                    $mail = new Mail($sender, $this->container['twig']);
                    $mail->setTo($userData['email'])
                        ->setSubject('Восстановление пароля')
                        ->setBodyFromTemplate('mail/reset_password.html.twig', [
                            'email' => $userData['email'],
                            'link' => $link
                        ])
                        ->send();
                });
                FlashMessage::add('success', 'На ваш email отправлено письмо с указаниями для восстановления пароля');
                header('Location: /auth/login' , 301);
                exit;
            }catch (\Delight\Auth\InvalidEmailException $e) {
                FlashMessage::add('warning', 'Неправильный email.');
            }
            catch (\Delight\Auth\EmailNotVerifiedException $e) {
                FlashMessage::add('warning', 'Email не подтвержден.');
            }
            catch (\Delight\Auth\ResetDisabledException $e) {
                FlashMessage::add('warning', 'Восстановление пароля запрещено.');
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
                FlashMessage::add('warning', 'Too many requests.');
            }
            header("Location: /auth/reset", 301);
            exit();
        }
    }

    public function updatePasswordForm(): void
    {
        try{
            $this->container['auth']->canResetPasswordOrThrow($_GET['selector'], $_GET['token']);
            $this->render('auth/update_password.twig', ['selector' => $_GET['selector'], 'token' => $_GET['token']]);
            exit;
        }catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
            FlashMessage::add('warning', 'Неправильный token');
        }
        catch (\Delight\Auth\TokenExpiredException $e) {
            FlashMessage::add('warning', 'Token устарел');
        }
        catch (\Delight\Auth\ResetDisabledException $e) {
            FlashMessage::add('warning', 'Восстановление пароля запрещено');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            FlashMessage::add('warning', 'Too many requests.');
        }
        header('Location: /auth/reset', 301);
        exit;
    }

    public function updatePassword(): void
    {
        if(!empty($_POST)){
            $userData = $_POST;
            $errors = UserValidator::ValidatePasswordData($userData);
            if(!empty($errors)){
                foreach ($errors as $error){
                    FlashMessage::add('warning', $error);
                }
                header('Location: /auth/reset_password?selector=' . $_POST['selector']. '&token='. $_POST['token'], 301);
                exit;
            }
            try {
                $this->container['auth']->resetPassword($_POST['selector'], $_POST['token'], $_POST['password']);
                FlashMessage::add('success', 'Пароль изменен.');
                header('Location: /auth/login', 301);
                exit;
            }
            catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
                FlashMessage::add('warning', 'Неправильный token');
            }
            catch (\Delight\Auth\TokenExpiredException $e) {
                FlashMessage::add('warning', 'Token устарел');
            }
            catch (\Delight\Auth\ResetDisabledException $e) {
                FlashMessage::add('warning', 'Восстановление пароля запрещено');
            }
            catch (\Delight\Auth\InvalidPasswordException $e) {
                FlashMessage::add('warning', 'Неправильный пароль');
            }
            catch (\Delight\Auth\TooManyRequestsException $e) {
                FlashMessage::add('warning', 'Too many requests');
            }
            header("Location: /auth/reset", 301);
            exit;
        }
    }
    public function oauth(): void
    {
        $authUrl = 'https://oauth.yandex.ru/authorize?' . http_build_query([
                'response_type' => 'code',
                'client_id' => $_ENV['YANDEX_CLIENT_ID'],
                'redirect_uri' => $_ENV['INIT_PATH'].'/auth/callback',
                'display' => 'mobile', // Опционально: popup, mobile
                'force_confirm' => true
            ]);
        header('Location: ' . $authUrl);
        exit;
    }
    public function callback(): void
    {
        $code = $_GET['code'];
        $tokenUrl = 'https://oauth.yandex.ru/token';
        $postData = [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'client_id' => $_ENV['YANDEX_CLIENT_ID'],
            'client_secret' => $_ENV['YANDEX_CLIENT_SECRET']
        ];

        $ch = curl_init($tokenUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $tokenData = json_decode($response, true);

        if (!isset($tokenData['access_token'])) {
            die('Ошибка получения токена: ' . $response);
        }
        $accessToken = $tokenData['access_token'];
        $refreshToken = $tokenData['refresh_token'] ?? null;
        $userInfoUrl = 'https://login.yandex.ru/info?format=json';
        $ch = curl_init($userInfoUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: OAuth ' . $accessToken
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $userResponse = curl_exec($ch);
        curl_close($ch);

        $userData = json_decode($userResponse, true);

        $email = $userData['default_email'];
        $yandexId = $userData['id'];

        $repository = new AuthRepository($this->container['db']);
        $existingUser = $repository->getExistingUser($email, $yandexId);

        if($existingUser){
            if(isset($existingUser['provider'])){
                $repository->updateUserToken($accessToken, $refreshToken, $existingUser['id']);
                $this->container['auth']->admin()->logInAsUserById($existingUser['id']);
                header("Location: /cabinet", 301);
                exit;
            }else{
                $repository->mergeUserData($existingUser['id'], $yandexId, $accessToken, $refreshToken);
                $this->container['auth']->admin()->logInAsUserById($existingUser['id']);
                header("Location: /cabinet", 301);
                exit;
            }
        }else{
            try{
                $auth = new Auth();
                $userId = $auth->oauth_register($this->container, $email);
                if(!$userId){
                    FlashMessage::add('warning', 'Произошла ошибка при регистрации');
                    header('Location: /auth/register', 301);
                }else{
                    FlashMessage::add('success', 'Вы успешно зарегистрировались на сайте. На ваш email отправлен пароль для входа на сайт');
                    $this->container['auth']->admin()->logInAsUserById($userId);
                    header('Location: /cabinet', 301);
                }
                exit();
            }catch (\Delight\Auth\InvalidEmailException $e) {
                die('Invalid email address');
            }
            catch (\Delight\Auth\InvalidPasswordException $e) {
                die('Invalid password');
            }
            catch (\Delight\Auth\UserAlreadyExistsException $e) {
                die('User already exists');
            } catch (RandomException $e) {
                die('Произошла непредвиденная ошибка');
            }
        }
    }
}
