<?php

namespace App\Creational\Builder\Car\Director;

use App\Creational\Builder\Car\Engine\Engine;
use App\Creational\Builder\Car\Builder\CarBuilder;
use App\Creational\Builder\Car\Builder\CarBuilderInterface;

class CarDirector
{
    private CarBuilderInterface $builder;

    function setBuilder(CarBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function makeSUV(Engine $engine, $number)
    {
        // $this->builder->reset();
        // $this->builder->setSeats($number);
        // $this->builder->setEngine($engine);
        // $this->builder->setType('SUV');
        // $this->builder->setTripComputer();
        // return $this->builder->get();

        return $this->builder->reset()
            ->setSeats($number)
            ->setEngine($engine)
            ->setType('SUV')
            ->setTripComputer()
            ->get();
    }
    public function makeSporstCar(Engine $engine, $number)
    {
        return $this->builder->reset()
            ->setSeats($number)
            ->setEngine($engine)
            ->setType('Sports')
            ->setTripComputer()
            ->get();
        // $this->builder->reset();
        // $this->builder->setSeats($number);
        // $this->builder->setEngine($engine);
        // $this->builder->setType('Sports');
        // $this->builder->setTripComputer();
    }
}
