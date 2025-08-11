<?php

namespace App\Interface;

interface DB
{
    public function __construct(\PDO $db);

    public function db(): \PDO;
}