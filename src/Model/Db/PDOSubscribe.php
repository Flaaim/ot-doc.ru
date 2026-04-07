<?php

namespace App\Model\Db;

use App\Interface\DB;
use App\Model\Db\PDO;

class PDOSubscribe extends PDO implements DB
{
    public function setSubscribe(string $table, int $id, string $plan = 'lifetime'): bool
    {
        $expiresSql = "NULL";
        if ($plan === '1_month') {
            $expiresSql = "DATE_ADD(NOW(), INTERVAL 1 MONTH)";
        } elseif ($plan === '1_year') {
            $expiresSql = "DATE_ADD(NOW(), INTERVAL 1 YEAR)";
        }

        $sql = "INSERT INTO " .$table. " SET status = 'active', user_id = :user_id, expires_at = $expiresSql ON DUPLICATE KEY UPDATE status = 'active', expires_at = $expiresSql";
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
        $sql = "SELECT id, status, user_id, expires_at FROM " . $table . " WHERE user_id = :user_id AND status = 'active' AND (expires_at IS NULL OR expires_at > NOW())";
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
