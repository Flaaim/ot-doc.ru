<?php

namespace App\Interface;

interface Search
{
    public function search(string $s): array|false;
}