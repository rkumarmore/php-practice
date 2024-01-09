<?php

namespace App\Creational\Builder\Car\Builder;

use App\Creational\Builder\Car\Engine\Engine;

class Car
{
    public $number_of_seats;
    public $type;
    public Engine $engine;
    function setType($type)
    {
        $this->type = $type;
    }

    function start()
    {
        $this->engine->start($this->type);
    }

    function stop()
    {
        $this->engine->stop($this->type);
    }
    function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }
}
