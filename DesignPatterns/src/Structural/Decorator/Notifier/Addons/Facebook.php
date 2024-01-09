<?php
namespace App\Structural\Decorator\Notifier\Addons;

use App\Structural\Decorator\Notifier\Addons\Addon;

class Facebook extends Addon{
    public function notify(string $message): void{
        echo parent::notify($message) . ' And Sent Facebook Notification';
    }
}

