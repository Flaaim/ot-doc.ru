<?php

namespace App\Model\Db\Admin;

use App\Model\Db\PDO;

class PDODelete extends PDO
{
    public function delete_document($table, $id): bool
    {
        $sql = "DELETE FROM " . $table . " WHERE id = :id";
        try{
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([':id' => $id]);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
    public function delete_types(string $table, $document_id): void
    {
        $sql = "DELETE FROM ". $table ."_type_mapping WHERE ". $table ."_id = :".$table. "_id";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->execute(["{$table}_id" => $document_id]);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
}