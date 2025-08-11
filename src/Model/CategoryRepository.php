<?php

namespace App\Model;

use App\Interface\DB;
use App\Interface\Repository;
use App\Model\Db\PDOCategory;

class CategoryRepository implements Repository
{
    protected DB $model;
    private string $table = 'category';

    public function __construct(\PDO $pdo)
    {
        $this->model = new PDOCategory($pdo);
    }
    public function read($row): Category
    {
        $result = new Category();
        $result->id = $row['id'];
        $result->name = $row['name'];
        $result->parent_id = $row['parent_id'];
        return $result;
    }

    public function getById(int $id): Category
    {
        $rows = $this->model->getById($this->table, $id);
        return $this->read($rows[0]);
    }

}