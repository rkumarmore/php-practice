<?php
namespace App\Creational\AbstractFactory\Furniture\Products\Sofas;

use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;


class ArtDecoSofa implements Sofa{
    function  hasLegs(){
        return 'I have ArtDeco Sofa legs';
    }
    function  nuberOfSeats(){
        return 'I have 2 ArtDeco seats';
    }
}