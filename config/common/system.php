<?php

declare(strict_types=1);

return [
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'user' => $_ENV['DB_USER'],
        'pass' => $_ENV['DB_PASS'],
        'name' => $_ENV['DB_NAME']
    ],
    'debug' => filter_var($_ENV['DEBUG'], FILTER_VALIDATE_BOOLEAN),
    'init' => [
        'ROOT' => dirname(__DIR__, 2),
        'WWW' => dirname(__DIR__, 2) . '/public',
        'PATH' => $_ENV['INIT_PATH'],
        'UPLOAD_DIR' => dirname(__DIR__, 2) . '/public/upload/',
        'HOST' => $_ENV['INIT_HOST'],
        'URI' => strtok($_SERVER['REQUEST_URI'], '?'),
    ],
    'admin' => [
        'login' => $_ENV['ADMIN_LOGIN'],
        'password' => $_ENV['ADMIN_PASSWORD'],
    ],
    'shop' => [
        'id' => $_ENV['SHOP_ID'],
        'key' => $_ENV['SHOP_KEY'],
    ]
];
