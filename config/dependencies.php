<?php

declare(strict_types=1);

$app_env = getenv('SERVER_NAME');
$file = ($app_env == 'test.ot-doc.ru') ? "dev.env" : ".env";
if(file_exists(__DIR__.'/env/'.$file)){
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/env/', $file);
    $dotenv->load();
}else{
    exit(".Env file not found at " . __DIR__.'/env/'.$file);
}

// Вместо glob() просто возвращаем конфиг из system.php
if (!file_exists(__DIR__.'/system.php')) {
    exit("system.php not found in config directory!");
}

return require __DIR__.'/system.php';
