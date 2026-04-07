<?php

use App\Controllers\AbstractController;
use App\Error;
use Slim\Factory\AppFactory;
use App\LegacyInvoker;

require __DIR__ . '/vendor/autoload.php';

session_start();

$container = require __DIR__. '/config/container.php';

new Error($container['twig'], $container['config']['debug'], new \App\Logger());

$psr11Container = new \Pimple\Psr11\Container($container);
AppFactory::setContainer($psr11Container);

$app = AppFactory::create();

$routeCollector = $app->getRouteCollector();
$routeCollector->setDefaultInvocationStrategy(new LegacyInvoker($container));

$app->addRoutingMiddleware();
$app->addErrorMiddleware($container['config']['debug'] ?? false, true, true);

$routes = require __DIR__. '/config/routes.php';
$routes($app);

$app->run();
