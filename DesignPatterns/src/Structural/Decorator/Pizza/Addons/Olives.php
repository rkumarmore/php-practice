<?php
namespace App\Structural\Decorator\Decorators;

use App\Structural\Decorator\Decorators\BaseDecorator\PizzaToppings;

class Olives extends PizzaToppings {

    protected $cost = 40;
    
    public function getDesc() {
        return parent::getDesc() . ' with Olives';
    }

    public function getCost() {
        return parent::getCost() + $this->cost;
    }
}