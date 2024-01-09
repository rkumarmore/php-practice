<?php
namespace App\Creational\AbstractFactory\Furniture\Products\Chairs;

use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;


class ModernChair implements Chair{
    public function  hasLegs(){
        return 'I have Modern Legs';
    }
    public function  sitOn(){
        return 'You sit on Modern Chair';
    }
}