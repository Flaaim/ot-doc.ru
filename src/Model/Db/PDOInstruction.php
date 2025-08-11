<?php

namespace App\Model\Db;

use App\Interface\DB;


class PDOInstruction extends PDO implements DB
{
    public function getAll(string $table): array|false
    {
        $sql = "SELECT id, title, filename, category_id, DATE_FORMAT(date, '%d.%m.%Y') as date, mime, size, count FROM ".$table;
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
    public function getById(string $table, int $id): array|false
    {
        $sql = "SELECT *  FROM ". $table ." WHERE id = :id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getLasts(string $table, int $count): array|false
    {
        $sql = 'SELECT id, title, filename, category_id, DATE_FORMAT(date, "%d.%m.%Y") as date, mime, size, count FROM ' . $table . ' LIMIT ' . $count;
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function search($table, $s): array|false
    {
        $sql = 'SELECT id, title, filename, size, mime, DATE_FORMAT(date, "%d.%m.%Y") as date, count, category_id FROM '. $table .' WHERE title LIKE :s LIMIT 20';
        try{
            $stmt = $this->db()->prepare($sql);
            $str = '%' . $s . '%';
            $stmt->bindParam(':s', $str, \PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}