<?php

namespace App\Helpers;

class Telegram
{
    const CHAT_ID = '1954013093';
    const TOKEN = "7779255968:AAHgf5zKujrpzYfgyG0B9toYjfVtagPvVq4";
    const URL = "https://api.telegram.org/bot7779255968:AAHgf5zKujrpzYfgyG0B9toYjfVtagPvVq4/";

    public static function sendMessage($message): void
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::URL.'sendMessage?chat_id='.self::CHAT_ID.'&text='.urlencode($message));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($curl);
        curl_close($curl);
    }

}