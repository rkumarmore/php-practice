<?php
namespace App\Structural\Decorator\Notifier\Components;

interface Notifier{
    public function notify(string $message): void;
}

