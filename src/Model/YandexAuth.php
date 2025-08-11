<?php

namespace App\Model;

class YandexAuth
{
    public int $id;
    public int $user_id;
    public int $provider_id;
    public string $provider;
    public string $access_token;
    public string $refresh_token;
}
