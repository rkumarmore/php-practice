<?php
namespace App\Creational\AbstractFactory\Furniture\Products\Chairs;

use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;


class ArtDecoChair implements Chair{
    public function  hasLegs(){
        return 'I have Art Deco Legs';
    }
    public function  sitOn(){
        return 'You sit on Art Deco Chair';
    }
}