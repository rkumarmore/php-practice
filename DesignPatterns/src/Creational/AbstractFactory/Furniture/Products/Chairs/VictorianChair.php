<?php
namespace App\Creational\AbstractFactory\Furniture\Products\Chairs;

use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;

class VictorianChair implements Chair{
    public function  hasLegs(){
        return 'I have Victorian Legs';
    }
    public function  sitOn(){
        return 'You sit on Victorian Chair';
    }
}