<?php

namespace App\Interface;

use App\Model\Template\Template;

interface File
{
    public function __construct(string $filename, string $size, ?Template $template);
}