<?php
namespace App\Structural\Decorator\Components;

use App\Structural\Decorator\Components\BaseComponent\Pizza;

class Margherita implements Pizza{

    protected $cost = 299;

    public function getDesc(){
        return "Margherita";
    }
    public function getCost(){
        return $this->cost;
    }
}