<?php
namespace App\Structural\Decorator\Components;

use App\Structural\Decorator\Components\BaseComponent\Pizza;

class VeggieParadise implements Pizza{

    protected $cost = 259;

    public function getDesc(){
        return "VeggieParadise";
    }

    public function getCost(){
        return $this->cost;
    }
}