<?php

namespace App\Controllers;

use App\Model\Template\DocumentCollection;
use App\Model\Template\DocumentRepository;
use App\Model\Template\TemplateRepository;

class AppController extends AbstractController
{
    public function index(): void
    {
        $repository = new TemplateRepository($this->container['db']);
        $templates = $repository->getAll();
        if(empty($templates)) {
            throw new \Exception("No templates found");
        }
        foreach ($templates as $template) {
            DocumentCollection::add(new DocumentRepository($this->container['db'], $template));
        }
        $lasts = DocumentCollection::getLasts();
        $count = DocumentCollection::getCount();
        $this->render('app/index.twig', ['templates' => $templates, 'lasts' => $lasts, 'count' => $count]);
    }
}