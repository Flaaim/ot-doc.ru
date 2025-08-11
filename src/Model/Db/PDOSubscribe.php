<?php

namespace App\Model\Db;

use App\Interface\DB;
use App\Model\Db\PDO;

class PDOSubscribe extends PDO implements DB
{
    public function setSubscribe(string $table, int $id): bool
    {
        $sql = "INSERT INTO " .$table. " SET status = 'active', user_id = :user_id ON DUPLICATE KEY UPDATE  status = 'active'";
        try {
            $stmt = $this->db()->prepare($sql);
            $stmt->bindParam(':user_id', $id, \PDO::PARAM_INT);
            return $stmt->execute();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function isSubscribeIsActive(string $table, int $user_id): array|false
    {
        $sql = "SELECT id, status, user_id FROM " . $table . " WHERE user_id = :user_id AND status = 'active'";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->bindParam(':user_id', $user_id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
}
