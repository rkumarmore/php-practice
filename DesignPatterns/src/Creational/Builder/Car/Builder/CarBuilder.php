<?php

namespace App\Creational\Builder\Car\Builder;

use App\Creational\Builder\Car\Builder\Car;
use App\Creational\Builder\Car\Engine\Engine;

class CarBuilder implements CarBuilderInterface
{
    private Car $car;
    public function reset(): CarBuilderInterface
    {
        $this->car = new Car();
        return  $this;
    }
    public function setSeats(int $number): CarBuilderInterface
    {
        $this->car->number_of_seats = $number;
        print("$number seats set for the car ");

        return $this;
    }
    public function setEngine(Engine $engine): CarBuilderInterface
    {
        $this->car->setEngine($engine);
        print("Engine was set for the car ");
        return $this;
    }
    public function setType($type): CarBuilderInterface
    {
        $this->car->type = $type;
        print("Car type $type was set for the car ");
        return $this;
    }
    public function setTripComputer(): CarBuilderInterface
    {
        // $this->car->setTripComputer($engine);
        print("setTripComputer was set for the car ");
        return $this;
    }
    public function setGPS(): CarBuilderInterface
    {
        print("setGPS was set for the car ");
        return $this;
    }

    public function get(): Car
    {
        $product = $this->car;
        $this->reset();
        return $product;
    }
}
