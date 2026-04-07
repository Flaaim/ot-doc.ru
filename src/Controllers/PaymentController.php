<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Model\PaymentRepository;
use App\Model\SubscribeRepository;
use YooKassa\Client;


class PaymentController extends AbstractController
{
    public function payment(): void
    {
        if(!$this->container['auth']->isLoggedIn()) {
            header('Location: /auth/login', 301);
            exit;
        }
        $this->render('/payment/index.twig');
    }

    public function process(): void
    {
        if(!$this->container['auth']->isLoggedIn()) {
            header('Location: /auth/login', 301);
            exit;
        }

        $plan = $_GET['plan'] ?? null;
        if (!in_array($plan, ['1_month', '1_year', 'lifetime'])) {
            header('Location: /payment/subscribe', 301);
            exit;
        }

        $amount = 0;
        $description = 'Оплата подписки';
        switch ($plan) {
            case '1_month':
                $amount = 299;
                $description = 'Подписка на 1 месяц';
                break;
            case '1_year':
                $amount = 1499;
                $description = 'Подписка на 1 год';
                break;
            case 'lifetime':
                $amount = 1990;
                $description = 'Пожизненный доступ';
                break;
        }

        $client = new Client();
        $client->setAuth(
            $this->container['config']['shop']['id'],
            $this->container['config']['shop']['key']
        );
        $repository = new PaymentRepository($this->container['db'], $client);
        $paymentUrl = $repository->createPayment(
            $this->container['auth']->getUserId(), 
            $amount, 
            $description, 
            $this->container['config']['init']['PATH'].'/cabinet',
            $plan
        );
        header('Location: ' . $paymentUrl, 301);
        exit;
    }
    public function endpoint(): void
    {
        $client = new Client();
        $client->setAuth(
            $this->container['config']['shop']['id'],
            $this->container['config']['shop']['key']
        );
        $repository = new PaymentRepository($this->container['db'], $client);
        $requestBody = file_get_contents('php://input');
        try{
            $repository->handleWebhook($requestBody);
            echo json_encode(['success' => true]);
        }catch (\Exception $e){
            http_response_code(500);
            echo json_encode([
                'success' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function check(): void
    {
        $repository = new SubscribeRepository($this->container['db']);
        $repository->checkSubscribeIsActive();
    }
}
