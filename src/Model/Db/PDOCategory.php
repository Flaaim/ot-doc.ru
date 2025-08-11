<?php

namespace App\Model\Db;


class PDOCategory extends PDO
{
    public function getById(string $table, int $id): array|false
    {
        $sql = 'SELECT * FROM '. $table .' WHERE id = :id';
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
}