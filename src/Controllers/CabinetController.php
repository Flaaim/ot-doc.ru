<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Model\ProfileRepository;
use App\Model\SubscribeRepository;

class CabinetController extends AbstractController
{
    public function cabinet(): void
    {
        if(!$this->container['auth']->isLoggedIn()){
            header('Location: /auth/login', 301);
            exit();
        }
        $email = $this->container['auth']->getEmail();
        $repository = new ProfileRepository($this->container['db']);
        $profile = $repository->getProfile($this->container['auth']->getUserId());
        $repository = new SubscribeRepository($this->container['db']);
        $subscribe = $repository->isSubscribeIsActive($this->container['auth']->getUserId());
        $this->render('/cabinet/index.twig', ['email' => $email, 'subscribe' => $subscribe, 'profile' => $profile]);
    }
}