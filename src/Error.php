<?php

namespace App;

use ErrorException;
use Psr\Log\LoggerInterface;
use Throwable;
use Twig\Environment;

class Error
{
    private Environment $twig;
    private Logger $logger;
    private bool $debug;
    public function __construct(Environment $twig, bool $debug, Logger $logger)
    {
        $this->twig = $twig;
        $this->debug = $debug;
        $this->logger = $logger;

        if($debug){
            error_reporting(E_ALL);
        }else{
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
        set_error_handler([$this, "errorHandler"]);
        register_shutdown_function([$this, "shutdownHandler"]);
    }

    public function exceptionHandler(Throwable $e): void
    {
        $this->logger->log($e->getMessage(), $e->getCode(), $e->getFile(), $e->getLine());
        $this->displayError($e);
    }

    public function errorHandler($level, $message, $file, $line): void
    {
        throw new \ErrorException($message, 0, $level, $file, $line);
    }

    public function shutdownHandler(): void
    {
        $error = error_get_last();
        if($error !== null){
            $e = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
            $this->exceptionHandler($e);
        }
    }
    private function displayError($e): void
    {

        $response_code = $e->getCode();
        if($response_code == 0){
            $response_code = 404;
        }
        http_response_code($response_code);

        if($response_code == 404 && !$this->debug){
            echo $this->twig->render('404.twig');
            exit;
        }
        http_response_code(500);
        if($this->debug){
            echo $e;
            exit;
        } else {
            echo $this->twig->render('500_prod.twig');
            exit;
        }

    }
}