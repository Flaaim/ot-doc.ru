<?php

namespace App\Controllers;

use App\EncryptUrl;
use App\Helpers\FlashMessage;
use App\Model\Download;
use App\Model\ProfileRepository;
use App\Model\SubscribeRepository;
use App\Model\Template\DocumentRepository;
use App\Model\Template\TemplateRepository;

class DownloadController extends AbstractController
{

    public function get_document(): void
    {
        if(!empty($_POST)){
            $id = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
            $template_id = filter_var($_POST["template_id"], FILTER_SANITIZE_NUMBER_INT);
            if(!$id){
                $result = ['message' => "Документ не найден!", 'link' => false];
                exit(json_encode($result));
            }
            $repository = new TemplateRepository($this->container['db']);
            $template = $repository->getById($template_id);
            if(!$template){
                throw new \Exception('Неверный шаблон документа');
            }
            $repository = new DocumentRepository($this->container['db'], $template);
            $document = $repository->getById($id);
            if(!$document->filename){
                $result = ['message' => "Документ не найден!", 'link' => false];
                exit(json_encode($result));
            }
            $repository->updateCountDownloads($document->id);
            $download_link = new EncryptUrl();
            $link = $download_link->getDownloadLink($document->filename);

            $result = ['status' => true, 'link' => $link, 'template_id' => $template->id, 'mime' => $document->mime];
            exit(json_encode($result));
        }

    }
    public function download(): void
    {
        if(isset($_GET['f']) && isset($_GET['tid']) && isset($_GET['mime'])){
            $mime = $_GET['mime'];
            $profile_rep = new ProfileRepository($this->container['db']);
            $profile = $profile_rep->getProfile($this->container['auth']->getUserId());

            $subscribe_rep = new SubscribeRepository($this->container['db']);
            $subscribe = $subscribe_rep->isSubscribeIsActive($this->container['auth']->getUserId());

            if($profile->attempts === 0 && !isset($subscribe->status)){
                FlashMessage::add('warning', 'Пробные попытки закончились');
                header('Location: '. $_SERVER['HTTP_REFERER'], 301);
                exit();
            }
            if(!isset($subscribe->status)){
                $profile_rep->updateAttempts($this->container['auth']->getUserId());
            }
            $encrypturl = new EncryptUrl();
            $repository = new TemplateRepository($this->container['db']);
            $template = $repository->getById($_GET['tid']);
            $download = new Download($this->container['config']['init']['UPLOAD_DIR'], $template, $mime);

            $download_file = $encrypturl->getDownloadFile($_GET['f']);
            $download->download($download_file);
            exit;
        }else {
            exit('Неверные параметры');
        }

    }
}
