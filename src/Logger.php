<?php

namespace App;

class Logger
{
    private string $path_to_log;
    public function __construct()
    {
        $this->path_to_log =  dirname(__DIR__).'/logs';
    }

    public function log($message, $code, $file, $line): void
    {
        $string = '['.date('d.m.Y H:i:s') . ' Сообщение: '. $message . ' Код: '. $code . ' Файл: '. $file . ' Строка:'. $line .']'. PHP_EOL;
        file_put_contents($this->path_to_log.'/error.log', $string, FILE_APPEND);
    }

    public function log_orphaned_files($message, $file): void
    {
        $string = '['.date('d.m.Y H:i:s') . ' Сообщение: '. $message .  ' Файл: '. $file . ']'. PHP_EOL;
        file_put_contents($this->path_to_log.'/orphaned_files.log', $string, FILE_APPEND);
    }
}