<?php
namespace App\Structural\Decorator\Decorators;

use App\Structural\Decorator\Decorators\BaseDecorator\PizzaToppings;

class Jalapeno extends PizzaToppings {

    protected $cost = 30;
    
    public function getDesc() {
        return parent::getDesc() . ' with Jalepeno';
    }

    public function getCost() {
        return parent::getCost() + $this->cost;
    }
}