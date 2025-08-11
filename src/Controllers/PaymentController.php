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
        $client = new Client();
        $client->setAuth(
            $this->container['config']['shop']['id'],
            $this->container['config']['shop']['key']
        );
        $repository = new PaymentRepository($this->container['db'], $client);
        $paymentUrl = $repository->createPayment($this->container['auth']->getUserId(), 350, 'Оплата подписки', $this->container['config']['init']['PATH'].'/cabinet');
        $this->render('/payment/index.twig', ['paymentUrl' => $paymentUrl]);
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
