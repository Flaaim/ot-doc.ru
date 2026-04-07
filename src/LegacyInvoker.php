<?php

namespace App;

use App\Controllers\AbstractController;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\InvocationStrategyInterface;
use Pimple\Container;

class LegacyInvoker implements InvocationStrategyInterface
{
    private Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(
        callable $callable,
        ServerRequestInterface $request,
        ResponseInterface $response,
        array $routeArguments
    ): ResponseInterface {
        if (is_array($callable) && is_object($callable[0]) && $callable[0] instanceof AbstractController) {
            $callable[0]->setContainer($this->container);
        }

        ob_start();
        try {
            if (is_array($callable)) {
                $ref = new \ReflectionMethod($callable[0], $callable[1]);
                if ($ref->getNumberOfParameters() > 0) {
                    call_user_func($callable, $routeArguments);
                } else {
                    call_user_func($callable);
                }
            } else {
                call_user_func($callable, $routeArguments);
            }
        } catch (\Throwable $e) {
            ob_end_clean();
            throw $e;
        }

        $output = ob_get_clean();
        if ($output !== '' && $output !== false) {
            $response->getBody()->write($output);
        }

        return $response;
    }
}
