<?php

namespace App\Providers;

use GuzzleHttp\Client;

class NotifyServiceProvider
{
    protected $userId;
    protected $senderId;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->userId = config('services.notifySms.user_id');
        $this->senderId = config('services.notifySms.sender_id');
        $this->apiKey = config('services.notifySms.api_key');
        $this->baseUrl = config('services.notifySms.base_url');
    }

    public function sendNotifySms($to, $message)
    {
        $client = new Client();
        $response = $client->post("{$this->baseUrl}/send", [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
            'json' => [
                'user_id' => $this->userId,
                // add userId can be found in settings page
                'api_key' => $this->apiKey,
                'sender_id' => $this->senderId,
                // add userId can be found in settings page
                'to' => $to,
                'message' => $message,
            ],
        ]);

        return $response->getBody()->getContents();
    }
}