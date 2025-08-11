<?php

namespace App\Model;

class Instruction
{
    public int $id;
    public string $title;
    public string $filename;
    public string $mime;
    public Category $category;
    public ?Category $parent_category;
    public string $size;
    public int $count;
    public string $date;
    public int $template_id;

}