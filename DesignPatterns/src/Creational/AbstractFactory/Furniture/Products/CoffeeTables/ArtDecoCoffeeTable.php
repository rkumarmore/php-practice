<?php
namespace App\Creational\AbstractFactory\Furniture\Products\CoffeeTables;

use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;


class ArtDecoCoffeeTable implements CoffeeTable{
    function  hasLegs(){
        return 'I have ArtDecoCoffeeTable legs';
    }
    function  hasTop(){
        return 'I have ArtDecoCoffeeTable Top';
    }
    function  hasShape(){
        return 'I have ArtDecoCoffeeTable Top';
    }
}