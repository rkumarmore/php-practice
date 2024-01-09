<?php

namespace App\Creational\Factory\Product\Prototype;

interface Transport
{
    public function receive();
    public function dispatch();
}
