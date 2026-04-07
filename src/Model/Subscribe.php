<?php

namespace App\Model;

class Subscribe
{
    public int $id;
    public int $user_id;
    public string $status;
    public ?string $expires_at = null;
}
