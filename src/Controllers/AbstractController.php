<?php

namespace App\Controllers;

use Pimple\Container;
use Twig\Environment;

class AbstractController
{
    protected Container $container;

    protected Object $model;

    public function setContainer(Container $container) : void {
        $this->container = $container;
    }

    protected function db() : \PDO
    {
        return $this->container['db'];
    }

    protected function twig() : Environment
    {
        return $this->container['twig'];
    }

    protected function render($view, array $data = []) : void
    {
        echo $this->twig()->render($view, $data);
    }

}