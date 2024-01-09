<?php

namespace App\Creational\Factory\Creator;

use App\Creational\Factory\Product\AirTransport;
use App\Creational\Factory\Creator\Prototype\Creator;
use App\Creational\Factory\Product\Prototype\Transport;

class AirTransportCreator extends Creator
{
    public function getTransportMode(): Transport
    {
        return new AirTransport();
    }
}
