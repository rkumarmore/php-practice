<?php
namespace App\Structural\Decorator\Decorators;

use App\Structural\Decorator\Decorators\BaseDecorator\PizzaToppings;

class ExtraCheese extends PizzaToppings {

    protected $cost = 20;
    
    public function getDesc() {
        
        return parent::getDesc() . ' Extra Cheese';
    }

    public function getCost() {
        return parent::getCost() + $this->cost;
    }
}

