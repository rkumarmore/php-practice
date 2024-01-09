<?php
namespace App\Structural\Composite;

use App\Structural\Composite\CompositeUnit;

class  TroopCarrier extends CompositeUnit{
    public function getComposite(): Unit{
        return $this;
    }
}