<?php
namespace App\Creational\AbstractFactory\Furniture\Products\Sofas;

use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;


class VictorianSofa implements Sofa{
    function  hasLegs(){
        return 'I have Victorian Sofa legs';
    }
    function  nuberOfSeats(){
        return 'I have 2 Victorian seats';
    }
}