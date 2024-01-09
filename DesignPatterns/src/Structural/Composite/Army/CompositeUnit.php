<?php
namespace App\Structural\Composite;

abstract class CompositeUnit extends Unit{
    public $units = [];
    // public $bombardStreangth = 0;

    public function addUnit(Unit $unit){
        $this->units[] = $unit;
    }
    public function removeUnit(Unit $unit){
        $index = array_search($unit, $this->units, true);
        if($index !== false){
            unset($this->units[$index]);
        }
    }
    public function bombardStreangth(): int{
        $bombardStreangth = 0;
        foreach($this->units as $unit){ 
            $bombardStreangth += $unit->bombardStreangth();
        }
        return $bombardStreangth;        
    }

    public function getComposite(): Unit{
        return $this;
    }
}