<?php
namespace App\Behavioral\Memento\Memento;

use App\Behavioral\Memento\Originator\OriginatorInterface;

class Snapshot implements MementoInterface{
    public OriginatorInterface $originator;
    public $curX, $curY, $text;

    public function __construct(OriginatorInterface $originator, $curX, $curY, $text ) {
        $this->originator = $originator;
        $this->curX = $curX;
        $this->curY = $curY;
        $this->text = $text;
    }
    public function restore(){
        $this->originator->setX($this->curX);
        $this->originator->setY($this->curY);
        $this->originator->setText($this->text);
    }
}