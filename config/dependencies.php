<?php

declare(strict_types=1);

$app_env = getenv('SERVER_NAME');
$file = ($app_env == 'test.ot-doc.ru') ? "dev.env" : ".env";
if(file_exists(__DIR__.'/env/'.$file)){
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/env/', $file);
    $dotenv->load();
}else{
    exit(".Env file not found");
}

$files = glob(__DIR__.'/env/*.php');

$configs = array_map(
    static function ($file) {
        return require $file;
    },
    $files
);

return array_merge_recursive(...$configs);
