<?php

declare(strict_types=1);

use App\Helpers\FlashMessage;
use Delight\Auth\Auth;
use Pimple\Container;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;

$container = new Container();
$container['config'] = require __DIR__ . '/dependencies.php';
$container['db'] = function ($c) {
    $db = $c['config']['database'];
    $url = 'mysql:host=' . $db['host'] . ';dbname=' . $db['name'] . ';charset=utf8mb4';
    return new PDO($url, $db['user'], $db['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
};
$container['auth'] = function ($c) {
    return new Auth($c['db'], null, null, false, null, false);
};
if ($container['config']['debug']) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

$container['twig'] = function ($c) {
    $loader = new FilesystemLoader(dirname(__DIR__,1) . '/src/views');
    $twig = new Environment($loader, [
        'cache' => __DIR__ . '/cache/views',
        'auto_reload' => true,
        'debug' => $c['config']['debug'],
    ]);
    $twig->addGlobal('app', $c);
    if ($c['config']['debug']) {
        $twig->addExtension(new DebugExtension());
    }
    return $twig;
};



$container['twig']->addFunction(new TwigFunction('display_flash_messages', function () {
    $messages = $_SESSION[FlashMessage::SESSION_KEY] ?? [];
    FlashMessage::clear(); // Очищаем сообщения после получения
    return $messages;
}));

$container['twig']->addFunction(new TwigFunction('is_user_logged_in', function ($c){
    return $c['auth']->isLoggedIn();
}));

return $container;
