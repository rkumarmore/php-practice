<?php
namespace App\Structural\Decorator\Decorators\BaseDecorator;

use App\Structural\Decorator\Components\BaseComponent\Pizza;

class PizzaToppings implements Pizza {

    protected $pizza;

    public function __construct(Pizza $pizza) {
        $this->pizza = $pizza;
    }

    public function getDesc() {

        return $this->pizza->getDesc();
        
    }

    public function getCost() {
        return $this->pizza->getCost();
    }
}