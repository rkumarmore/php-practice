<?php

namespace App\Creational\Factory\Creator;

use App\Creational\Factory\Product\RoadTransport;
use App\Creational\Factory\Creator\Prototype\Creator;
use App\Creational\Factory\Product\Prototype\Transport;

class RoadTransportCreator extends Creator
{
    public function getTransportMode(): Transport
    {
        return new RoadTransport();
    }
}
