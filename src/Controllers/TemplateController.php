<?php

namespace App\Controllers;

use App\Model\CategoryRepository;
use App\Model\ProfileRepository;
use App\Model\Template\InstructionRepository;
use App\Service;
use JetBrains\PhpStorm\NoReturn;

class TemplateController extends AbstractController
{
    /* ИНСТРУКЦИИ */
    public function instructions(): void
    {
        $repository = new InstructionRepository($this->container['db']);
        $last_instructions = $repository->getLasts(6);

        if($last_instructions){
            $last_instructions = Service::FileSizeConvert(array:$last_instructions);
        }
        $instructions = $repository->getAll();
        $this->render('templates/instructions/index.twig', ['instructions' => $instructions, 'last_instructions' => $last_instructions]);
    }

    #[NoReturn] public function get_instruction($id): void
    {
        $id = $id['id'];
        $repository = new InstructionRepository($this->container['db']);
        $instruction = $repository->getById($id);
        $instruction->size = Service::FileSizeConvert($instruction->size);
        $profile = null;
        if($this->container['auth']->isLoggedIn()) {
            $repository = new ProfileRepository($this->container['db']);
            $profile = $repository->getProfile($this->container['auth']->getUserId());
        }
        $this->render('templates/instructions/get_one.twig',
            ['instruction' => $instruction, 'profile' => $profile, 'request_uri' => $_SERVER['REQUEST_URI']]);
    }

    #[NoReturn] public function get_instructions(): void
    {
        $inst_repository = new InstructionRepository($this->container['db']);
        $instructions = $inst_repository->getAll();
        if(empty($instructions)) {
            $result = ['status' => false, 'message' => 'No instructions found.'];
            exit(json_encode($result));
        }
        exit(json_encode(['data' => $instructions]));
    }

    /* ПРИКАЗЫ */
    public function orders(): void
    {

    }
}