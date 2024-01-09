<?php
namespace App\Structural\Composite;

abstract class Unit{
    public abstract function bombardStreangth(): int;
    public function getComposite(): Unit{
        $army = new Army();
        $army->addUnit($this);
        return $army;  
    }
}