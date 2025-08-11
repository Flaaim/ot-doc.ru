<?php

use App\Controllers\AbstractController;
use App\Error;
use FastRoute\Dispatcher;


require __DIR__ . '/vendor/autoload.php';
//http_response_code(500);

session_start();


$container = require __DIR__. '/config/container.php';

new Error($container['twig'], $container['config']['debug'], new \App\Logger());


$dispatcher = require __DIR__. '/config/routes.php';

$uri = $_SERVER['REQUEST_URI'];
$pos = strpos($uri, '?');
if ($pos !== false) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);


$routeInfo = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $uri);
switch ($routeInfo[0]) {
    case Dispatcher::NOT_FOUND:
        http_response_code(404);
        throw new \Exception('Страница не найдена', 404);
    case Dispatcher::FOUND:
        [$class, $method] = $routeInfo[1];
        /** @var AbstractController $instance */
        $instance = new $class;
        $instance->setContainer($container);
        call_user_func_array([$instance, $method], [$routeInfo[2]]);
        break;
}
