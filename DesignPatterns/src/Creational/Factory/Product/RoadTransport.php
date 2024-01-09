<?php

namespace App\Creational\Factory\Product;

use App\Creational\Factory\Product\Prototype\Transport;

class RoadTransport implements Transport
{
    public function receive()
    {
        echo "Received to Road transport \n";
    }

    public function dispatch()
    {
        echo "Dispatched from Road transport \n";
    }
}
