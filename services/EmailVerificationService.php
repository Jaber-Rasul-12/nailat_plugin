<?php

namespace Nailat\Nailat\Services;
/**
 * Class EmailVerificationService
 *
 * @package AcornAssociated\Justice\Services
 *
 * @author Jaber Rasul
 */


class EmailVerificationService
{
    public $apiKey;

    public function __construct()
    {
        $this->apiKey = env("API_EmailVerificationService");
        
    }

    /**
     * Check if there is an active internet connection.
     *
     * @return bool Returns true if the internet is connected, false otherwise.
     */
    public function isInternetConnected(): bool
    {
        $connected = @fsockopen("www.google.com", 80); 
        if ($connected) {
            fclose($connected);
            return true;
        }
        return false;
    }

    /**
     * Verify the validity of an email address.
     *
     * @param string|null $email The email address to verify.
     * 
     * @return bool Returns true if the email is valid, false otherwise.
     */
    public function verifyEmail($email = null): bool
    {
        if (!is_null($email)) {
            $api = $this->apiKey;
            $url = "https://api.hunter.io/v2/email-verifier?email=$email&api_key=$api";
            $response = file_get_contents($url);
            $response = json_decode($response);
            if($response->data->status == "invalid"){
                return false;
            }else if($response->data->status == "valid"){
                return true;
            }
        }else{
            return false;
        }
        return false;
        
    }
}
