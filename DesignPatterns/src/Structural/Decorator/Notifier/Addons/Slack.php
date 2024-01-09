<?php
namespace App\Structural\Decorator\Notifier\Addons;

class Slack extends Addon{
    public function notify(string $message): void{
        echo parent::notify($message) . ' And Sent Slack Notification';
    }
}

