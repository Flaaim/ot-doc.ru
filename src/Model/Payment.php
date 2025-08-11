<?php

namespace App\Model;

class Payment
{
    public int $id;
    public int $user_id;
    public string $payment_id;
    public float $amount;
    public string $currency;
    public string $status;
    public string $description;
    public string $created_at;
    public string $updated_at;
}