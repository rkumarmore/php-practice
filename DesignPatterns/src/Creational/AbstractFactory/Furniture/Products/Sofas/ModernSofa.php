<?php
namespace App\Creational\AbstractFactory\Furniture\Products\Sofas;

use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;


class ModernSofa implements Sofa{
    function  hasLegs(){
        return 'I have Modern Sofa legs';
    }
    function  nuberOfSeats(){
        return 'I have 2 Modern seats';
    }
}