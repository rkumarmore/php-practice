<?php

namespace App\Structural\Adapter\Notifications;

interface Notification
{
    public function send(string $title, string $message);
}
