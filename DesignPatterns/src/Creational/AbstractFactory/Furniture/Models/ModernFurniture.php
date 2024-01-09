<?php

namespace App\Creational\AbstractFactory\Furniture\Models;

use App\Creational\AbstractFactory\Furniture\Models\Furniture;
use App\Creational\AbstractFactory\Furniture\Products\Sofas\ModernSofa;
use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\ModernChair;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\ModernCoffeeTable;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;



class ModernFurniture extends Furniture
{
    public function getChair(): Chair{
        return new ModernChair();
    }
    public function getSofa(): Sofa{
        return new ModernSofa();

    }
    public function getCaoffeTable(): CoffeeTable{
        return new ModernCoffeeTable();
    }

}
