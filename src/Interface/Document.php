<?php

namespace App\Interface;

use App\Model\Template\Template;

interface Document
{
    public function __construct(\PDO $container, ?Template $template);

    public function read($row);
}