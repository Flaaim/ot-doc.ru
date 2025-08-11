<?php

namespace App\Helpers;

final class FlashMessage
{
    const SESSION_KEY = 'flash_messages';

    /**
     * Добавляет flash-сообщение.
     *
     * @param string $type Тип сообщения (например, 'success', 'error', 'warning').
     * @param string $message Текст сообщения.
     */
    public static function add(string $type, string $message): void
    {
        // Инициализируем массив сообщений, если он еще не существует
        if (!isset($_SESSION[self::SESSION_KEY])) {
            $_SESSION[self::SESSION_KEY] = [];
        }
        // Добавляем сообщение в сессию
        $_SESSION[self::SESSION_KEY][] = [
            'type' => $type,
            'message' => $message,
        ];
    }
    public static function clear(): void
    {
        unset($_SESSION[self::SESSION_KEY]);
    }
}