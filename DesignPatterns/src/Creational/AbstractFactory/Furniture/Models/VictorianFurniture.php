<?php

namespace App\Creational\AbstractFactory\Furniture\Models;

use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;
use App\Creational\AbstractFactory\Furniture\Products\Sofas\VictorianSofa;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\VictorianChair;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\VictorianCoffeeTable;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;



class VictorianFurniture extends Furniture
{
    public function getChair(): Chair{
        return new VictorianChair();
    }
    public function getSofa(): Sofa{
        return new VictorianSofa();

    }
    public function getCaoffeTable(): CoffeeTable{
        return new VictorianCoffeeTable();
    }

}
