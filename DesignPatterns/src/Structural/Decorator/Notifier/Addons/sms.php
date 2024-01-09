<?php
namespace App\Structural\Decorator\Notifier\Addons;

class sms extends Addon{
    public function notify(string $message): void{
        echo parent::notify($message) . ' And Sent SMS Notification';
    }
}

