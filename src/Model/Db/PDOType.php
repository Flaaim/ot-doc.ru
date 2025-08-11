<?php

namespace App\Model\Db;

use App\Model\Db\PDO;

class PDOType extends PDO
{
    public function getAll($table): array|false
    {
        $sql = "SELECT id, name, parent_id FROM ". $table . "_types ";
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $data = [];
            $i = 1;
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $data[$i] = $row;
                $i++;
            }
            return $this->getTree($data);
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    private function getTree($data): array
    {
        $tree = [];
//        echo "<pre>";
//        var_dump($data);
//        echo "<pre>";
//        die;
        foreach($data as $key => &$node){
            if($node['parent_id'] != null){
                $data[$node['parent_id']]['children'][$key] = &$node;
            } else {
                $tree[$key] = &$node;
            }
        }

        return $tree;
    }
}