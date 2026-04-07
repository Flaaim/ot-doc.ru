<?php

namespace App\Model;

use App\Interface\DB;
use App\Interface\Repository;
use App\Model\Db\PDOSubscribe;


class SubscribeRepository implements Repository
{
    protected DB $model;
    private string $table = 'subscriptions';
    public function __construct(\PDO $container)
    {
        $this->model = new PDOSubscribe($container);
    }

    public function read($row): Subscribe
    {
        $result = new Subscribe();
        $result->id = $row['id'];
        $result->user_id = $row['user_id'];
        $result->status = $row['status'];
        $result->expires_at = $row['expires_at'] ?? null;
        return $result;
    }

    public function setSubscribe(int $user_id, string $plan = 'lifetime'): bool
    {
        return $this->model->setSubscribe($this->table, $user_id, $plan);
    }

    public function isSubscribeIsActive($user_id): ?Subscribe
    {
        $rows = $this->model->isSubscribeIsActive($this->table, $user_id);
        if(!empty($rows)){
            return $this->read($rows[0]);
        }
        return null;
    }
}
