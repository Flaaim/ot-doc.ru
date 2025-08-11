<?php

namespace App\Interface;

use App\Model\Template\Template;

interface Repository
{
    public function __construct(\PDO $container);

    public function read($row);

}