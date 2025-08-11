<?php

namespace App\Model\Template;

class Document
{
    public int $id;
    public string $title;
    public string $filename;
    public string $mime;
    public string $size;
    public int $count;
    public string $date;
    public int $template_id;
    public ?string $type_name_1;
    public ?string $type_name_2;
}
