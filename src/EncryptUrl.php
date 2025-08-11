<?php

namespace App;

class EncryptUrl
{
    protected string $key;
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->key = "RiV3wc8uojflkaKLhkPYHU3Hkjd2";
    }

    private function encrypt($data){
        $ciphering = "AES-256-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $decryption_iv = '1234567891011121';
        $encryption_key = 'RiV3wc8uojflkaKLhkPYHU3Hkjd2';
        return openssl_encrypt($data, $ciphering, $encryption_key, 0, $decryption_iv);
    }

    private function decrypt($data){
        $ciphering = "AES-256-CTR";
        $decryption_iv = '1234567891011121';
        $decryption_key = 'RiV3wc8uojflkaKLhkPYHU3Hkjd2';

        return openssl_decrypt($data, $ciphering, $decryption_key, 0, $decryption_iv);
    }

    public function getDownloadLink($file)
    {
        $this->removeOldSession($file);
        $existingkey = $this->getExistingFile($file);
        if($existingkey){
            return $existingkey;
        }
        $fileuk = uniqid();

        $_SESSION['enc_url_ts'][$fileuk] = $this->encrypt($file);

        return $fileuk;
    }

    public function getDownloadFile($data)
    {
        $fileuk = $data;
        if(!isset($_SESSION['enc_url_ts'][$fileuk])){
            header('HTTP/1.1 403 Forbidden');
            echo "Forbidden to access this file";
            return;
        }
        return trim($this->decrypt($_SESSION['enc_url_ts'][$fileuk]));
    }

    private function removeOldSession($file): void
    {
        if(isset($_SESSION['enc_url_ts']))
            foreach($_SESSION['enc_url_ts'] as $key=>$value){
                if(trim($this->decrypt($value))==$file){
                    unset($_SESSION['enc_url_ts'][$key]);
                    return;
                }
            }
    }

    private function getExistingFile($file){
        if(isset($_SESSION['enc_url_ts']))
            foreach($_SESSION['enc_url_ts'] as $key=>$value){
                if(trim($this->decrypt($value))==$file){
                    return $this->encrypt($key);
                }
            }
        return false;
    }

}