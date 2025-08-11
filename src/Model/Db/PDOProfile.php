<?php

namespace App\Model\Db;

use App\Interface\DB;

class PDOProfile extends PDO implements DB
{
    public function getById(string $table, int $id): array|false
    {
        $sql = 'SELECT id, attempts, user_id FROM ' . $table . ' WHERE user_id = :id ';
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function insert(string $table, int $user_id): bool
    {
        $sql = "INSERT INTO " . $table . " (user_id) VALUES (:user_id)";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->bindParam(':user_id', $user_id, \PDO::PARAM_INT);
            return $stmt->execute();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
    public function updateAttempts(string $table, int $id): bool
    {
        $sql = "UPDATE " . $table . " SET attempts = attempts - 1 WHERE user_id = ?";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->bindValue(1, $id, \PDO::PARAM_INT);
            return $stmt->execute();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }


}