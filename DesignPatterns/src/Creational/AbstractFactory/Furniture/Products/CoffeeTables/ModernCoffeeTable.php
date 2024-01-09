<?php
namespace App\Creational\AbstractFactory\Furniture\Products\CoffeeTables;

use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;


class ModernCoffeeTable implements CoffeeTable{
    function  hasLegs(){
        return 'I have ModernCoffeeTable legs';
    }
    function  hasTop(){
        return 'I have ModernCoffeeTable Top';
    }
    function  hasShape(){
        return 'I have ModernCoffeeTable Top';
    }
}