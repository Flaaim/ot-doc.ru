<?php

namespace App\Model\Db;

class PDODocument extends PDO
{
    public function search($table, $s): array|false
    {
        $sql = "SELECT
            i.id AS document_id,
            i.title AS document_name,
            i.size,
            i.filename,
            i.mime,
            i.date,
            i.count,
            SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 1) AS type_name_1,
            IF(
            LENGTH(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|')) - LENGTH(REPLACE(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', '')) > 0,
            SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 2), '|', -1),
            NULL
                ) AS type_name_2
            FROM ". $table ." i
            LEFT JOIN ". $table ."_type_mapping itm ON i.id = itm.". $table ."_id
            LEFT JOIN ". $table ."_types it ON itm.type_id = it.id
            WHERE i.title LIKE :s 
            GROUP BY i.id, i.title, i.size
            LIMIT 20";
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

    public function getAll($table, $start, $limit) : array|false
    {
        $sql = "SELECT
            i.id AS document_id,
            i.title AS document_name,
            i.size,
            i.filename,
            i.mime,
            i.date,
            i.count,
            SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 1) AS type_name_1,
            IF(
            LENGTH(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|')) - LENGTH(REPLACE(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', '')) > 0,
            SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 2), '|', -1),
            NULL
            ) AS type_name_2
            FROM ". $table ." i
            LEFT JOIN ". $table ."_type_mapping itm ON i.id = itm.". $table ."_id
            LEFT JOIN ". $table ."_types it ON itm.type_id = it.id
            GROUP BY i.id, i.title, i.size ORDER by i.date DESC LIMIT :start, :limit";

        try{
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':start', $start, \PDO::PARAM_INT);
            $stmt->bindParam(':limit', $limit, \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getById($table, $id): array|false
    {
        $sql = "SELECT
            i.id AS document_id,
            i.title AS document_name,
            i.size,
            i.filename,
            i.mime,
            i.date,
            i.count,
            SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 1) AS type_name_1,
            IF(
            LENGTH(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|')) - LENGTH(REPLACE(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', '')) > 0,
            SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 2), '|', -1),
            NULL
                ) AS type_name_2
            FROM ". $table ." i
            LEFT JOIN ". $table ."_type_mapping itm ON i.id = itm.". $table ."_id
            LEFT JOIN ". $table ."_types it ON itm.type_id = it.id
            WHERE i.id = :id -- Укажите ID инструкции
            GROUP BY i.id, i.title, i.size";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function countRows($table): int|false
    {
        $sql = "SELECT COUNT(*) FROM ". $table;
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchColumn();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function updateCountDownloads($table, $id): bool
    {
        $sql = "UPDATE " . $table . " SET count = count + 1 WHERE id = :id";
        try{
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([':id' => $id]);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getLasts($table, $count): array|false
    {
        $sql = "SELECT
            i.id AS document_id,
            i.title AS document_name,
            i.size,
            i.filename,
            i.mime,
            i.date,
            i.count,
            SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 1) AS type_name_1,
            IF(
            LENGTH(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|')) - LENGTH(REPLACE(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', '')) > 0,
            SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 2), '|', -1),
            NULL
            ) AS type_name_2
            FROM ". $table ." i
            LEFT JOIN ". $table ."_type_mapping itm ON i.id = itm.". $table ."_id
            LEFT JOIN ". $table ."_types it ON itm.type_id = it.id
            GROUP BY i.id, i.title, i.size  ORDER by i.date DESC LIMIT ". $count;
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getAllForDataTables($table): array|false
    {
        $sql = "SELECT
            i.id AS document_id,
            i.title AS document_name,
            i.size,
            i.filename,
            i.mime,
            DATE_FORMAT(i.date, '%d.%m.%Y') as date,
            i.count,
            SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 1) AS type_name_1,
            IF(
            LENGTH(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|')) - LENGTH(REPLACE(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', '')) > 0,
            SUBSTRING_INDEX(SUBSTRING_INDEX(GROUP_CONCAT(it.name ORDER BY it.id SEPARATOR '|'), '|', 2), '|', -1),
            NULL
            ) AS type_name_2
            FROM ". $table ." i
            LEFT JOIN ". $table ."_type_mapping itm ON i.id = itm.". $table ."_id
            LEFT JOIN ". $table ."_types it ON itm.type_id = it.id
            GROUP BY i.id, i.title, i.size ORDER by i.date DESC";
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function getDataForSiteMap($table): array|false
    {
        $sql = "SELECT id FROM ". $table;
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
}