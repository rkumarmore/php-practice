<?php
namespace App\Structural\Decorator\Notifier\Components;

class Mail implements Notifier{
    public function notify(string $message): void{
        echo $message;
    }
}

