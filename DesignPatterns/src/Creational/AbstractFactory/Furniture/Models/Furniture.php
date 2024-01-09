<?php

namespace App\Creational\AbstractFactory\Furniture\Models;

use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;



abstract class Furniture
{
    abstract function getChair(): Chair;
    abstract function getSofa(): Sofa;
    abstract function getCaoffeTable(): CoffeeTable;

    function  calculatePrice() {

        $price = 0;

        return $price;
        
    }
}
