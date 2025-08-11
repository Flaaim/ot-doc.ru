<?php

namespace App\Interface;

use YooKassa\Client;

interface Payment
{

    public function __construct(\PDO $container, Client $client);

    public function createPayment(int $userId, float $amount, string $description, string $returnUrl): string;
}
