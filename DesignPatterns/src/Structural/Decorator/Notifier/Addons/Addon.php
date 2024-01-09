<?php
namespace App\Structural\Decorator\Notifier\Addons;

use App\Structural\Decorator\Notifier\Components\Notifier;

class Addon implements Notifier{
    public $notifier;
    public function __construct(Notifier $notifier) {
        $this->notifier = $notifier;
    }
    public function notify(string $message): void{
        $this->notifier->notify($message);
    }
}