<?php

namespace App\Model\Template;

class Type
{
    public int $id;
    public ?int $parent_id;
    public ?array $children;
    public string $name;
}