<?php

namespace App\Structural\Adapter\Notifications;

use App\Structural\Adapter\Notifications\Notification;

class SlackApiNotification implements Notification
{
    private $slack;
    private $message;
    public function __construct(SlackApi $slack)
    {
        $this->slack = $slack;
    }
    public function send($title, string $message)
    {
        $this->sendMessage($message);
    }
    public function sendMessage(string $message)
    {
        $this->slack->sendMessage($message);
    }
}
