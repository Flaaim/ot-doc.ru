<?php

namespace App\Model\Db;

use App\Interface\DB;

class PDOYandexAuth extends PDO implements DB
{
    public function getExistingUser($table, $email, $provider_id): array|false
    {
        $sql = "SELECT u.id, oauth.provider FROM users u
        LEFT JOIN user_oauth_providers oauth ON u.id = oauth.user_id
        WHERE u.email = ? OR (oauth.provider = 'yandex' AND oauth.provider_id = ?)";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->execute([$email, $provider_id]);
            return $stmt->fetch();
        }catch (\PDOException $e){
            throw new \PDOException($e);
        }
    }

    public function updateUserToken($access_token, $refresh_token, $user_id): void
    {
        $sql = "UPDATE user_oauth_providers SET access_token = ?, refresh_token = ? WHERE user_id = ? AND provider = 'yandex'";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->execute([$access_token, $refresh_token, $user_id]);
        }catch (\PDOException $e){
            throw new \PDOException($e);
        }
    }

    public function mergeUserData($user_id, $provider_id, $access_token, $refresh_token): void
    {
        $sql = "INSERT INTO user_oauth_providers (user_id, provider, provider_id, access_token, refresh_token) VALUES (?, 'yandex', ?, ?, ?)";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->execute([$user_id, $provider_id, $access_token, $refresh_token]);
        }catch (\PDOException $e){
            throw new \PDOException($e);
        }
    }

    public function createUser($user_id, $provider_id, $access_token, $refresh_token): void
    {
        $sql = "INSERT INTO user_oauth_providers (user_id, provider, provider_id, access_token, refresh_token) VALUES (?, 'yandex', ?, ?, ?)";
        try{
            $stmt = $this->db()->prepare($sql);
            $stmt->execute([$user_id, $provider_id, $access_token, $refresh_token]);
        }catch (\PDOException $e){
            throw new \PDOException($e);
        }
    }
}
