<?php

namespace App\Creational\AbstractFactory\Furniture\Models;

use App\Creational\AbstractFactory\Furniture\Models\Furniture;
use App\Creational\AbstractFactory\Furniture\Products\Sofas\Sofa;
use App\Creational\AbstractFactory\Furniture\Products\Sofas\ArtDecoSofa;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\ArtDecoChair;
use App\Creational\AbstractFactory\Furniture\Products\Chairs\Chair;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\ArtDecoCoffeeTable;
use App\Creational\AbstractFactory\Furniture\Products\CoffeeTables\CoffeeTable;



class ArtDecoFurniture extends Furniture
{
    public function getChair(): Chair{
        return new ArtDecoChair();
    }
    public function getSofa(): Sofa{
        return new ArtDecoSofa();

    }
    public function getCaoffeTable(): CoffeeTable{
        return new ArtDecoCoffeeTable();
    }

}
