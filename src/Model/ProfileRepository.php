<?php

namespace App\Model;

use App\Interface\DB;
use App\Interface\Repository;
use App\Model\Db\PDOProfile;
use App\Model\Template\Template;

class ProfileRepository implements Repository
{
    protected DB $model;
    private string $table = 'profiles';
    public function __construct(\PDO $container)
    {
        $this->model = new PDOProfile($container);
    }

    public function read($row): Profile
    {
        $result = new Profile();
        $result->id = $row['id'];
        $result->attempts = $row['attempts'];
        $result->user_id = $row['user_id'];
        return $result;
    }

    public function setProfile(int $user_id): bool
    {
        return $this->model->insert($this->table, $user_id);
    }

    public function getProfile(int $user_id): ?Profile
    {
        $rows = $this->model->getById($this->table, $user_id);
        if($rows){
            return $this->read($rows[0]);
        }
        return null;
    }

    public function updateAttempts(int $user_id): bool
    {
        return $this->model->updateAttempts($this->table, $user_id);
    }

}