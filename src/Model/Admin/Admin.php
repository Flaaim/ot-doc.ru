<?php

namespace App\Model\Admin;

use App\Interface\DB;
use App\Model\Db\PDO;

class Admin extends PDO implements DB
{
    public function __construct($pdo)
    {
        parent::__construct($pdo);
    }
}