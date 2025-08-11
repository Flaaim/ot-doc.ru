<?php

namespace App\Model\Db;

use App\Interface\DB;

class PDOPayment extends PDO implements DB
{
    public function savePaymentToDatabase(int $userId, string $payment_id)
    {
        $sql = "INSERT INTO payment (user_id, payment_id, status) VALUES (:user_id, :payment_id, 'waiting')";
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $userId);
            $stmt->bindParam(':payment_id', $payment_id);
            $stmt->execute();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }

    public function updatePaymentStatus(int $user_id, $payment_status): void
    {
        $sql = "UPDATE payment SET status = :status WHERE user_id = :user_id";
        try{
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':status', $payment_status);
            $stmt->execute();
        }catch (\PDOException $e){
            throw new \PDOException($e->getMessage());
        }
    }
}