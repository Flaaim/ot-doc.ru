<?php

namespace App\Model;

use App\Interface\DB;
use App\Interface\Repository;
use App\Interface\Search;
use App\Model\Db\PDOInstruction;


class InstructionRepository implements Repository, Search
{
    protected DB $model;
    private string $table = 'instructions';
    protected CategoryRepository $category;
    const TEMPLATE_ID = 2;

    public function __construct(\PDO $pdo)
    {
        $this->model = new PDOInstruction($pdo);
        $this->category = new CategoryRepository($pdo);
    }

    public function read($row): Instruction
    {
        $result = new Instruction();
        $result->id = $row['id'];
        $result->title = $row['title'];
        $result->filename = $row['filename'];
        $result->mime = $row['mime'];
        $result->size = $row['size'];
        $result->date = $row['date'];
        $result->count = $row['count'];
        $result->template_id = self::TEMPLATE_ID;
        $result->category = $this->category->getById($row['category_id']);
        $result->parent_category = ($result->category->parent_id == 0) ? null : $this->category->getById($result->category->parent_id);
        return $result;
    }

    public function getAll($filter = []): array
    {
        $rows = $this->model->getAll($this->table);
        $result = array();
        foreach($rows as $row) {
                $result[] = $this->read($row);
            }
        return $result;
    }

    public function search(string $s): array|false
    {
        $rows = $this->model->search($this->table, $s);
        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }

    public function getById(string $id): Instruction
    {
        $rows = $this->model->getById($this->table, $id);
        return $this->read($rows[0]);
    }
    public function getLasts(int $count): array|false
    {
        $rows = $this->model->getLasts($this->table, $count);
        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }
}