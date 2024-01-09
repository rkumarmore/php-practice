<?php
namespace App\Structural\Decorator\Components;

use App\Structural\Decorator\Components\BaseComponent\Pizza;

class FarmHouse implements Pizza{

    protected $cost = 199;

    public function getDesc(){
        return "FarmHouse";
    }

    public function getCost(){
        return $this->cost;
    }
}