<?php

namespace App\Model;

use App\Helpers\FlashMessage;
use App\Interface\DB;
use App\Model\Db\PDOPayment;
use YooKassa\Client;
use App\Interface\Payment;
use YooKassa\Common\Exceptions\ApiConnectionException;
use YooKassa\Common\Exceptions\ApiException;
use YooKassa\Common\Exceptions\AuthorizeException;
use YooKassa\Common\Exceptions\BadApiRequestException;
use YooKassa\Common\Exceptions\ExtensionNotFoundException;
use YooKassa\Common\Exceptions\ForbiddenException;
use YooKassa\Common\Exceptions\InternalServerError;
use YooKassa\Common\Exceptions\NotFoundException;
use YooKassa\Common\Exceptions\ResponseProcessingException;
use YooKassa\Common\Exceptions\TooManyRequestsException;
use YooKassa\Common\Exceptions\UnauthorizedException;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;

class PaymentRepository implements Payment
{
    protected Db $model;
    protected SubscribeRepository $subscribe;
    private Client $client;


    public function __construct(\PDO $container, Client $client)
    {
        $this->model = new PDOPayment($container);
        $this->subscribe = new SubscribeRepository($container);
        $this->client = $client;
    }

    /**
     * @throws NotFoundException
     * @throws ResponseProcessingException
     * @throws ApiException
     * @throws ExtensionNotFoundException
     * @throws BadApiRequestException
     * @throws AuthorizeException
     * @throws InternalServerError
     * @throws ForbiddenException
     * @throws TooManyRequestsException
     * @throws ApiConnectionException
     * @throws UnauthorizedException
     */
    public function createPayment(int $userId, float $amount, string $description, string $returnUrl): string
    {
        $payment = $this->client->createPayment([
            'amount' => [
                'value' => $amount,
                'currency' => 'RUB',
            ],
            'confirmation' => [
                'type' => 'redirect',
                'return_url' => $returnUrl,
            ],
            'capture' => true,
            'description' => $description,
            'metadata' => [
                'user_id' => $userId,
            ],
        ]);
        $this->model->savePaymentToDatabase($userId, $payment->getId());
        return $payment->getConfirmation()->getConfirmationUrl();
    }

    /**
     * @throws NotFoundException
     * @throws ResponseProcessingException
     * @throws ApiException
     * @throws ExtensionNotFoundException
     * @throws BadApiRequestException
     * @throws InternalServerError
     * @throws ForbiddenException
     * @throws TooManyRequestsException
     * @throws UnauthorizedException
     */
    public function checkPaymentStatus(string $paymentId): string
    {
        try {
            $payment = $this->client->getPaymentInfo($paymentId);
            return $payment->getStatus();
        } catch (\Exception $e) {
            error_log('Failed to check payment status: ' . $e->getMessage());
            throw new \RuntimeException('Failed to check payment status: ' . $e->getMessage());
        }
    }

    public function handleWebhook(string $requestBody): void
    {
        $notification = json_decode($requestBody, true);
        if (isset($notification['event'])) {
            switch ($notification['event']) {
                case NotificationEventType::PAYMENT_SUCCEEDED:
                    $payment = new NotificationSucceeded($notification);
                    $this->processSuccessfulPayment($payment->getObject());
                    break;
                case NotificationEventType::PAYMENT_WAITING_FOR_CAPTURE:
                    $payment = new NotificationWaitingForCapture($notification);
                    $this->processWaitingForCapture($payment->getObject());
                    break;
                default:
                    // Обработка других событий (если нужно)
                    break;
            }
        }
    }

    private function processSuccessfulPayment($payment): void
    {
        $userId = $payment->getMetadata()->user_id;
        $paymentId = $payment->getId();

        // Обновляем статус подписки пользователя в базе данных
        $this->setUserSubscription($userId, $this->checkPaymentStatus($paymentId));

        // Логируем успешный платеж
        //$this->logPayment($paymentId, 'success');
    }

    private function processWaitingForCapture($payment): void
    {
        $paymentId = $payment->getId();

        // Логируем ожидание подтверждения
        //$this->logPayment($paymentId, 'waiting_for_capture');
    }

    private function setUserSubscription(int $userId, string $payment_status): void
    {
        $this->model->updatePaymentStatus($userId, $payment_status);
        if($this->subscribe->setSubscribe($userId)){
            FlashMessage::add('success', 'Подписка активирована!');
            exit;
        }

    }
}
