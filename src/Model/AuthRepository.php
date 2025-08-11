<?php

namespace App\Model;

use App\Interface\DB;
use App\Interface\Repository;
use App\Model\Db\PDOYandexAuth;

class AuthRepository implements Repository
{
    protected Db $model;
    private string $table = 'user_oauth_providers';
    public function __construct(\PDO $container)
    {
        $this->model = new PDOYandexAuth($container);
    }

    public function read($row): YandexAuth
    {
        $result = new YandexAuth();
        $result->id = $row['id'];
        $result->user_id = $row['user_id'];
        $result->provider_id = $row['provider_id'];
        $result->provider = $row['provider'];
        $result->access_token = $row['access_token'];
        $result->refresh_token = $row['refresh_token'];
        return $result;
    }

    public function getExistingUser($email, $yandex_id): array|false
    {
        return $this->model->getExistingUser($this->table, $email, $yandex_id);
    }

    public function updateUserToken($accessToken, $refreshToken, $user_id): void
    {
        $this->model->updateUserToken($accessToken, $refreshToken, $user_id);
    }

    public function mergeUserData($user_id, $provider_id, $access_token, $refresh_token): void
    {
        $this->model->mergeUserData($user_id, $provider_id, $access_token, $refresh_token);
    }
    public function createUser($user_id, $provider_id, $access_token, $refresh_token): void
    {
        $this->model->createUser($user_id, $provider_id, $access_token, $refresh_token);
    }
}
