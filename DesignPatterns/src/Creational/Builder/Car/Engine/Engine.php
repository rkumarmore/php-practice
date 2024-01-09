<?php

namespace App\Creational\Builder\Car\Engine;

interface Engine
{
    public function start($type);
    public function stop($type);
}
