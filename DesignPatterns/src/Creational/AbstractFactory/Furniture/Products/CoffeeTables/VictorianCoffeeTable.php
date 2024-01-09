<?php
namespace App\Creational\AbstractFactory\Furniture\Products\CoffeeTables;

use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;


class VictorianCoffeeTable implements CoffeeTable{
    function  hasLegs(){
        return 'I have VictorianCoffeeTable legs';
    }
    function  hasTop(){
        return 'I have VictorianCoffeeTable Top';
    }
    function  hasShape(){
        return 'I have VictorianCoffeeTable Top';
    }
}