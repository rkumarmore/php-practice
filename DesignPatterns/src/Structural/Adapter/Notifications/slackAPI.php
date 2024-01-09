<?php

namespace App\Structural\Adapter\Notifications;

class SlackApi
{
    private $user;
    private $apiKey;
    public $chatId;

    public function __construct(string $user, string $apiKey)
    {
        $this->user = $user;
        $this->apiKey = $apiKey;
        $this->chatId = $this->login();
    }

    public function logIn(): string
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->user}'.\n";

        return $this->generateChatId();
    }

    public function sendMessage(string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$this->chatId' chat: '$message'.\n";
    }

    function generateChatId($length = 5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
