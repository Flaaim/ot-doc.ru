<?php

return [
    'database' => [
        'host' => $_ENV['DB_HOST'],
        'user' => $_ENV['DB_USER'],
        'pass' => $_ENV['DB_PASS'],
        'name' => $_ENV['DB_NAME']
    ],
    'debug' => filter_var($_ENV['DEBUG'], FILTER_VALIDATE_BOOLEAN),
    'init' => [
        'ROOT' => dirname(__DIR__),
        'WWW' => dirname(__DIR__).'/public',
        'PATH' => $_ENV['INIT_PATH'],
        'UPLOAD_DIR' => dirname(__DIR__).'/public/upload/',
        'HOST' => $_ENV['INIT_HOST'],
        'URI' => strtok($_SERVER['REQUEST_URI'], '?'),
    ],
    'admin' => [
        'login' => $_ENV['ADMIN_LOGIN'],
        'password' => $_ENV['ADMIN_PASSWORD'],
    ]
];
