<?php

namespace App\Creational\Builder\Car\Engine;

class CombustionEngine implements Engine
{
    public function start($type)
    {
        echo "$type Combustion engine started";
    }
    public function stop($type)
    {
        echo "$type Combustion engine stopped";
    }
}
