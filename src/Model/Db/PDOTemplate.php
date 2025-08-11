<?php

namespace App\Model\Db;

use App\Interface\DB;

class PDOTemplate extends PDO implements DB
{
    public function getAll($table): array|false
    {
        $sql = 'SELECT id, name, slug FROM '. $table .' ORDER BY id';
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getById($id, $table): array|false
    {
        $sql = "SELECT * FROM ". $table ." WHERE id = :id";
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getBySlug($slug, $table): array|false
    {
        $sql = "SELECT * FROM ". $table ." WHERE slug = :slug";
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':slug' => $slug]);
            return $stmt->fetch();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
}