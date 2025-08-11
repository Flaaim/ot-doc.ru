<?php

namespace App\Model;

use App\Interface\DB;
use App\Interface\Repository;
use App\Model\Db\PDOTemplate;

class TemplateRepository implements Repository
{
    protected string $table = 'template';
    protected DB $model;

    public function __construct(\PDO $db)
    {
        $this->model = new PDOTemplate($db);
    }

    public function read($row): Template
    {
        $result = new Template();
        $result->id = $row['id'];
        $result->name = $row['name'];
        return $result;
    }

    public function getAll(): array|false
    {
        $rows = $this->model->getAll($this->table);
        $result = array();
        foreach ($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }
}