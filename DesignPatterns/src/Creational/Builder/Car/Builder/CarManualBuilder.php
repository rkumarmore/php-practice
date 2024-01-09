<?php

namespace App\Creational\Builder\Car\Builder;

use App\Creational\Builder\Car\Engine\Engine;
use App\Creational\Builder\Car\Builder\Manual;

class CarManualBuilder
{
    private Manual $manual;
    public function reset()
    {
        return new Manual();
    }
    public function setSeats(int $number)
    {
    }
    public function setEngine(Engine $engine)
    {
    }
    public function setTripComputer()
    {
    }
    public function setGPS()
    {
    }

    public function get(): Manual
    {
        return new Manual();
    }
}
