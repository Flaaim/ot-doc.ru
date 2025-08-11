<?php

namespace App\Model\Template;

use App\Interface\DB;
use App\Model\Db\PDOType;

class TypeRepository implements \App\Interface\Document
{
    protected DB $model;
    protected Template $template;

    public function __construct(\PDO $container, ?Template $template)
    {
        $this->model = new PDOType($container);
        $this->template = $template;
    }

    public function read($row): Type
    {
        $result = new Type();
        $result->id = $row['id'];
        $result->name = $row['name'];
        $result->parent_id = $row['parent_id'];
        $result->children = $row['children'] ?? null;
        return $result;
    }

    public function getAll(): array|false
    {
        $rows = $this->model->getAll($this->template->slug);

        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }

    public function getSubtypes(array $types): array
    {
        $subtypes = array();
        foreach($types as $type) {
            if($type->children != null){
                $subtypes = $type->children;
            }
        }
        return $subtypes;
    }
}