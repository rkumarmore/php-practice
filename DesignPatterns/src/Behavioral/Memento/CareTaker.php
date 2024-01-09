<?php
namespace App\Behavioral\Memento;

use App\Behavioral\Memento\Memento\MementoInterface;
use App\Behavioral\Memento\Originator\OriginatorInterface;

class CareTaker {

    private $history =[];

    public function makeBackup(OriginatorInterface $originator){

        $this->history[] = $originator->backup();
        end($this->history);
    }

    public function undo(){
        if(!empty($this->history))
            return prev($this->history);
    }
}