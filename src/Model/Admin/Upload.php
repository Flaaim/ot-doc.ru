<?php

namespace App\Model\Admin;


use App\Interface\DB;
use App\Model\Db\Admin\PDOUpload;

final class Upload
{
    protected DB $model;
    protected File $document;
    protected array $type;
    public function __construct(\PDO $container, File $document, array $type)
    {
        $this->model = new PDOUpload($container);
        $this->document = $document;
        $this->type = $type;
    }

    public function upload_file(): bool
    {
        try{
            $this->model->db()->beginTransaction();
            $last_insert_id = $this->model->insert_document($this->document);

            if(!$last_insert_id){
               return false;
            }
            $this->model->delete_existing_types($this->document, $last_insert_id);
            $this->model->insert_types($this->type, $last_insert_id, $this->document);
            return $this->model->db()->commit();
        }catch (\PDOException $e){
            $this->model->db()->rollBack();
            throw new \PDOException($e->getMessage());
        }
    }

}
