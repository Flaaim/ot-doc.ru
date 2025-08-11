<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;
use App\Model\Admin\Cron\DeleteFiles;
use App\Model\Admin\Delete;
use App\Model\Admin\File;
use App\Model\Admin\Upload;
use App\Model\Template\DocumentCollection;
use App\Model\Template\DocumentRepository;
use App\Model\Template\TemplateRepository;
use App\Model\Template\TypeRepository;
use App\Service;
use Delight\Auth\Role;
use JetBrains\PhpStorm\NoReturn;

class AdminController extends AbstractController
{
    public function index(): void
    {

        if(!$this->container['auth']->isLoggedIn()){
            header('Location: /admin/auth/login', 301);
            exit();
        }
        if(!$this->isAdmin()){
            exit('Доступ запрещен!');
        }
        $this->render('admin/index.twig');
    }
    public function login(): void
    {
        $this->render('admin/login.twig');
    }
    public function file_index()
    {
        if(!$this->isAdmin()){
            exit('Доступ запрещен!');
        }
        $this->render('admin/file/index.twig');
    }
    #[NoReturn] public function upload(): void
    {
        if(!$this->isAdmin()){
            exit('Доступ запрещен!');
        }
        if(!empty($_FILES)){
            $file_count = sizeof($_FILES["file"]["name"]);
            $repository = new TemplateRepository($this->container['db']);
            $template = $repository->getById($_POST["template_id"]);
            $result = [];
            for($i = 0; $i < $file_count; $i++){
                $file = new File(basename($_FILES['file']['name'][$i]), $_FILES['file']['size'][$i], $template);
                $upload = new Upload($this->container['db'], $file, $_POST['type']);
                if($upload->upload_file()){
                    $upload_dir = $this->container['config']['init']['UPLOAD_DIR'].$template->slug.'/';

                    $file_name = $file->getFilename();
                    $file_type = $file->getType();

                    $uploadfile = $upload_dir . $file_name.'.'.$file_type;

                    if(!is_dir($upload_dir)){
                        mkdir($upload_dir, 0777, true);
                    }

                    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile)) {
                        $result['message'][$i] = 'Файл не содержит ошибок и успешно загрузился на сервер.\n';
                    } else {
                        $result['error'][$i] = 'Ошибка при загрузке файла';
                    }
                }
            }
            exit(json_encode($result));
        }

    }
    public function document($data) : void
    {
        if(!$this->isAdmin()){
            exit('Доступ запрещен!');
        }
        $slug = $data['slug'];
        $repository = new TemplateRepository($this->container['db']);
        $template = $repository->getBySlug($slug);
        if($template){
             $this->render('admin/template/' . $template->slug . '/all.twig', ['template' => $template]);
        }
    }
    public function document_upload($data):void
    {
        if(!$this->isAdmin()){
            exit('Доступ запрещен!');
        }
        $slug = $data['slug'];
        $repository = new TemplateRepository($this->container['db']);
        $template = $repository->getBySlug($slug);
        $repository = new TypeRepository($this->container['db'], $template);
        $types = $repository->getAll();

        if($template){
            $this->render('/admin/template/'. $template->slug .'/upload.twig', ['types' => $types, 'template' => $template]);
        }
    }
    public function delete(): void
    {
        if(!$this->isAdmin()){
            exit('Доступ запрещен!');
        }
        if(!empty($_POST)){
            $data = $_POST['data'];
            $repository = new TemplateRepository($this->container['db']);
            $template = $repository->getById($data['template_id']);
            $repository = new DocumentRepository($this->container['db'], $template);
            $document = $repository->getById($data['id']);
            $delete = new Delete(
                $this->container['db'],
                $document,
                $template,
                $this->container['config']['init']['UPLOAD_DIR']
            );
            if($delete->delete()){
                $result = ['status' => 'success', 'message' => 'Документ успешно удален из базы данных'];
                exit(json_encode($result));
            }
            $result = ['status' => 'error', 'message' => 'Ошибка при удалении документа'];
            exit(json_encode($result));
        }
    }
    public function delete_orphaned_files(): void
    {
        $repository = new TemplateRepository($this->container['db']);
        $templates = $repository->getAll();

        foreach ($templates as $template){
//            DocumentCollection::add(new DocumentRepository($this->container['db'], $template));
//            $slugs[] = $template->slug;
            $repository = new DocumentRepository($this->container['db'], $template);
            $db_documents = $repository->getAllForDataTables();
            $filenames = Service::getFilenames($db_documents);
            $delete_files = new DeleteFiles(
                $filenames,
                $this->container['config']['init']['UPLOAD_DIR'],
                $template->slug);

            $orphaned_files = $delete_files->get_orphaned_files();
            $delete_files->delete_orphaned_files($orphaned_files);

        }

        //$db_documents = DocumentCollection::getAll();
        //$filenames = Service::getFilenames($db_documents);



    }
    public function isAdmin(): bool
    {
        return $this->container['auth']->admin()->doesUserHaveRole($this->container['auth']->getUserId(), Role::ADMIN);
    }
}