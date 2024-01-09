<?php

namespace App\Creational\Builder\Car\Builder;

use App\Creational\Builder\Car\Engine\Engine;

interface CarBuilderInterface
{
    public function reset();
    public function setSeats(int $number);
    public function setEngine(Engine $engine);
    public function setTripComputer();
    public function setGPS();
    public function setType($type);
    public function get();
}
