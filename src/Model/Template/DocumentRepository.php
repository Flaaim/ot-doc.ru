<?php

namespace App\Model\Template;

use App\Interface\DB;
use App\Model\Db\PDODocument;


class DocumentRepository implements \App\Interface\Document
{
    protected DB $model;
    private Template $template;

    public function __construct(\PDO $container, ?Template $template = null)
    {
        $this->model = new PDODocument($container);
        $this->template = $template;
    }

    public function read($row): Document
    {
        $result = new Document();
        $result->id = $row['document_id'];
        $result->title = $row['document_name'];
        $result->filename = $row['filename'];
        $result->mime = $row['mime'];
        $result->size = $row['size'];
        $result->date = $row['date'];
        $result->count = $row['count'];
        $result->template_id = $this->template->id;
        $result->type_name_1 = $row['type_name_1'];
        $result->type_name_2 = $row['type_name_2'];
        return $result;
    }

    public function search(string $s): array|false
    {
        $rows = $this->model->search($this->template->slug, $s);
        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }

    public function getAll($start, $limit): array|false
    {
        $rows = $this->model->getAll($this->template->slug, $start, $limit);
        $result = array();
        $number = 1;
        foreach($rows as $row) {
            $result[$number++] = $this->read($row);
        }
        return $result;
    }

    public function getById($id): ?Document
    {
        $row = $this->model->getById($this->template->slug, $id);
        return $this->read($row);
    }

    public function getLasts(int $count): array|false
    {
        $rows = $this->model->getLasts($this->template->slug, $count);
        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }

    public function getCount(): int|false
    {
        return $this->model->countRows($this->template->slug);
    }

    public function updateCountDownloads($id): void
    {
        $this->model->updateCountDownloads($this->template->slug, $id);
    }

    public function getAllForDataTables(): array|false
    {
        $rows = $this->model->getAllForDataTables($this->template->slug);
        $result = array();
        foreach($rows as $row) {
            $result[] = $this->read($row);
        }
        return $result;
    }


}