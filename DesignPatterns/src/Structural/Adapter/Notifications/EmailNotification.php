<?php

namespace App\Structural\Adapter\Notifications;

use App\Structural\Adapter\Notifications\Notification;

class EmailNotification implements Notification
{
    private $adminEmail;
    private $toEmail = [];
    public function __construct(string $adminEmail, $toEmail)
    {
        $this->adminEmail = $adminEmail;
        $this->adminEmail = $toEmail;
    }
    public function send(string $title, string $message)
    {
        foreach ($this->toEmail as $email) {
            echo "Sent mail to {$email} with the title {$title} and message {$message}";
        }
    }
}
