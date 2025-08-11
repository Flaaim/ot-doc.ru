<?php

namespace App\Helpers;

final class UserValidator
{
    /**
     * @param string $email
     * @return bool
     */
    public static function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     *  Пароль должен быть не менее 8 символов, содержать цифры и латинские буквы
     * @param string $password
     * @return bool
     */
    public static function validatePassword(string $password): bool
    {
        return strlen($password) >= 8 &&
            preg_match('/[A-Za-z]/', $password) &&
            preg_match('/[0-9]/', $password);
    }

    public static function validateRegisterData(array $userData): array
    {
        $errors = [];
        if(!isset($userData['email']) || !self::validateEmail($userData['email'])) {
            $errors['email'] = 'Некорректный email';
        }
        return array_merge($errors, self::ValidatePasswordData($userData));
    }

    public static function ValidateLoginData(array $userData): array
    {
        $errors = [];
        if(empty($userData['email']) || empty($userData['password'])) {
            $errors['empty_inputs'] = 'Поля формы не заполнены.';
        }
        return $errors;
    }

    public static function ValidateResetPasswordData(array $userData): array
    {
        $errors = [];
        if(!isset($userData['email']) || !self::validateEmail($userData['email'])) {
            $errors['email'] = 'Некорректный email';
        }
        return $errors;
    }

    public static function ValidatePasswordData(array $userData): array
    {
        $errors = [];
        if(!isset($userData['password']) || !self::validatePassword($userData['password'])) {
            $errors['password'] = 'Пароль должен быть не менее 8 символов и содержать цифры и буквы';
        }
        if(!isset($userData['confirm_password'])) {
            $errors['confirmPassword'] = 'Поле повторите пароль должно быть заполнено.';
        }
        if($userData['password'] !== $userData['confirm_password']) {
            $errors['passwordsDoNotMatch'] = 'Пароли не совпадают!';
        }
        return $errors;
    }
}