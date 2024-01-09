<?php
namespace App\Behavioral\Memento\Originator;

use App\Behavioral\Memento\Memento\Snapshot;

class Editor implements OriginatorInterface{

    public Snapshot $snapshot;
    public $curX, $curY, $text;

    public function setX($x) : void {
        $this->curX = $x;        
    }
    public function setY($y) : void {
        $this->curY = $y;        
    }
    public function setText($text) : void {
        $this->text = $text;        
    }
    public function backup(): Snapshot{

        $this->snapshot = new Snapshot($this, $this->curX, $this->curY, $this->text);

        return $this->snapshot;
    }
}