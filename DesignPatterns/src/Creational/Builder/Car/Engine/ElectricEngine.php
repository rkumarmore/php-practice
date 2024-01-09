<?php

namespace App\Creational\Builder\Car\Engine;

class ElectricEngine implements Engine
{
    public function start($type)
    {
        print("$type Electric engine started");
    }
    public function stop($type)
    {
        echo "$type Electric engine stopped";
    }
}
