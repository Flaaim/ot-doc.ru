<?php

namespace App\Model\Template;

use App\Interface\DB;
use App\Model\Db\PDOTemplate;

class TemplateRepository implements \App\Interface\Document
{
    protected DB $model;
    private string $table = 'template';

    public function __construct(\PDO $pdo, ?Template $template = null)
    {
        $this->model = new PDOTemplate($pdo);
    }

    public function read($row): Template
    {
        $result = new Template();
        $result->id = $row['id'];
        $result->name = $row['name'];
        $result->slug = $row['slug'];
        return $result;
    }

    public function getAll(): array
    {
        $rows = $this->model->getAll($this->table);
        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }

    public function getById(int $id): ?Template
    {
        $rows = $this->model->getById($id, $this->table);
        return $this->read($rows[0]);
    }

    public function getBySlug($slug): ?Template
    {
        $row =  $this->model->getBySlug($slug, $this->table);
        return $this->read($row);
    }
}