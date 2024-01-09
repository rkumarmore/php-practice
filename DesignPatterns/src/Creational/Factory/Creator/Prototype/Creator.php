<?php

namespace App\Creational\Factory\Creator\Prototype;

use App\Creational\Factory\Product\Prototype\Transport;

abstract class Creator
{
    abstract public function getTransportMode(): Transport;

    public function send()
    {
        $transport = $this->getTransportMode();
        $transport->receive();
        $transport->dispatch();
    }
}
