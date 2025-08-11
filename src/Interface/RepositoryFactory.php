<?php

namespace App\Interface;

interface RepositoryFactory
{
    public function createRepository(int $template_id, \PDO $db);
}