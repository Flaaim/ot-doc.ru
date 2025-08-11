<?php

namespace App\Controllers;

use App\Model\ProfileRepository;
use App\Model\SubscribeRepository;
use App\Model\Template\DocumentRepository;
use App\Model\Template\InstructionRepository;
use App\Model\Template\PreviewDocument;
use App\Model\Template\TemplateRepository;
use App\Model\Template\TypeRepository;
use App\Pagination;
use App\Service;

class DocumentController extends AbstractController
{
    public function document($data): void
    {
        $slug = $data['slug'];
        $repository = new TemplateRepository($this->container['db']);
        $template = $repository->getBySlug($slug);
        if($template) {
            $repository = new DocumentRepository($this->container['db'], $template);
            $lasts = $repository->getLasts(6);
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $limit = 25;
            $total = $repository->getCount();
            $pagination = new Pagination($page, $limit, $total);
            $start = $pagination->getStart();
            $documents = $repository->getAll($start, $limit);

            $this->render('templates/' . $template->slug . '/index.twig', ['template' => $template, 'lasts' => $lasts, 'documents' => $documents, 'pagination' => $pagination]);
        }
    }

    public function get_documents($data): void
    {
        $template_id = $data['template_id'];
        $repository = new TemplateRepository($this->container['db']);
        $template = $repository->getById($template_id);
        if($template) {
            $repository = new DocumentRepository($this->container['db'], $template);
            $documents = $repository->getAllForDataTables();
            if(empty($documents)) {
                $result = ['status' => false, 'message' => 'No documents found.'];
                exit(json_encode($result));
            }
            exit(json_encode(['data' => $documents]));
        }
    }
    public function js_table($data): void
    {
        $slug = $data['slug'];
        $repository = new TemplateRepository($this->container['db']);
        $template = $repository->getBySlug($slug);
        if($template){
            $this->render('templates/js_table.twig', ['template' => $template]);
        }
    }
    public function get($data): void
    {
        $document_id = $data['id'];
        $template_id = $data['template_id'];
        $repository = new TemplateRepository($this->container['db']);
        $template = $repository->getById($template_id);
        if($template) {
            $repository = new DocumentRepository($this->container['db'], $template);
            $document = $repository->getById($document_id);
            if(!$document){
                throw new \Exception('Document not found');
            }
            $document->size = Service::FileSizeConvert($document->size);

            if($this->container['auth']->isLoggedIn()){
                $repository = new ProfileRepository($this->container['db']);
                $profile = $repository->getProfile($this->container['auth']->getUserId());
                $repository = new SubscribeRepository($this->container['db']);
                $subscribe = $repository->isSubscribeIsActive($this->container['auth']->getUserId());
            }

            $preview = new PreviewDocument($this->container['config']['init']['UPLOAD_DIR'].$template->slug.'/'.$document->filename.'.'.$document->mime);
            $preview_document = $preview->getText();
            $this->render('templates/get_one.twig',
                ['document' => $document, 'profile' => $profile ?? null, 'subscribe' => $subscribe ?? null, 'preview_document' => $preview_document]);
        }
    }
}