<?php

namespace App\Model\Db;

use App\Interface\DB;

class PDO implements DB
{
    protected \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function db(): \PDO
    {
        return $this->db;
    }


}