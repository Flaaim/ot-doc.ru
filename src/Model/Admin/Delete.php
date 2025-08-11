<?php

namespace App\Model\Admin;

use App\Interface\DB;
use App\Model\Db\Admin\PDODelete;
use App\Model\Template\DocumentRepository;
use App\Model\Template\Template;
use App\Model\Template\Document;
final class Delete
{
    protected DB $model;
    protected Document $document;
    protected Template $template;

    protected string $filePath;
    public function __construct(\PDO $container, Document $document, Template $template, string $upload_dir)
    {
        $this->model = new PDODelete($container);
        $this->document = $document;
        $this->template = $template;
        $this->filePath = $upload_dir.$template->slug.'/'.$document->filename.'.'.$document->mime;
    }

    public function delete(): bool
    {
        try{
            $this->model->db()->beginTransaction();

            if (file_exists($this->filePath)) {
                if (!unlink($this->filePath)) {
                    throw new \Exception("Не удалось удалить файл из файловой системы.");
                }
            }

            $this->model->delete_document($this->template->slug, $this->document->id);
            $this->model->delete_types($this->template->slug, $this->document->id);
            return $this->model->db()->commit();
        }catch (\Exception $e){
            $this->model->db()->rollBack();
            throw new \Exception($e->getMessage());
        }
    }

    public function delete_orphaned_files(array $db_filenames): void
    {

    }
}