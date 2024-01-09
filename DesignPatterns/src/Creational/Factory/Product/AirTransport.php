<?php

namespace App\Creational\Factory\Product;

use App\Creational\Factory\Product\Prototype\Transport;

class AirTransport implements Transport
{
    public function receive()
    {
        echo "Received to Air transport \n";
    }

    public function dispatch()
    {
        echo "Dispatched from Air transport \n";
    }
}
