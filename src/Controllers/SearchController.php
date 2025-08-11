<?php

namespace App\Controllers;

use App\Model\Template\DocumentRepository;
use App\Model\Template\TemplateRepository;
use JetBrains\PhpStorm\NoReturn;

class SearchController extends AbstractController
{
    #[NoReturn] public function search($id): void
    {
        if(!empty($_POST)){
            $template_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
            $s = filter_var($_POST['s'], FILTER_SANITIZE_SPECIAL_CHARS);
            $repository = new TemplateRepository($this->container['db']);
            $template = $repository->getById($template_id);
            $repository = new DocumentRepository($this->container['db'], $template);
            $search = $repository->search($s);
            if(!$search){
                $result = ['status' => false, 'message' => 'Ничего не найдено... Измените запрос'];
                exit(json_encode($result));
            }
            exit(json_encode(['status' => true, 'search' => $search]));
        }

    }
}