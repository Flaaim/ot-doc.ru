<?php

namespace App\Model\Db\Admin;

use App\Model\Db\PDO;

class PDOUpload extends PDO
{
    public function insert_document($document): int|false
    {
        $sql = "INSERT INTO ". $document->template->slug ." SET title = :title, mime = :mime, size = :size, filename = :filename ON DUPLICATE KEY UPDATE title = :title, mime = :mime, size = :size, date = CURRENT_TIMESTAMP()";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->execute([':title' => $document->title, ':filename' => $document->filename, ':mime' => $document->mime, ':size' => $document->size]);
            $this->db()->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->db()->lastInsertId();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function insert_types(array $type, string $last_insert_id, $document): void
    {

        try{
        foreach ($type as $item) {
            $sql = "INSERT INTO ". $document->template->slug ."_type_mapping SET ". $document->template->slug. "_id = :" .$document->template->slug."_id, type_id = :type_id ON DUPLICATE KEY UPDATE type_id = :type_id";

            $stmt = $this->db()->prepare($sql);
            $stmt->execute([':type_id' => $item, ":{$document->template->slug}_id" => $last_insert_id]);
        }
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function delete_existing_types($document, int $last_insert_id): void
    {
        try {
        $sql = "DELETE FROM " . $document->template->slug . "_type_mapping WHERE " . $document->template->slug . "_id = :" . $document->template->slug . "_id";
        $stmt = $this->db()->prepare($sql);
        $stmt->execute([":{$document->template->slug}_id" => $last_insert_id]);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }

    }

}
