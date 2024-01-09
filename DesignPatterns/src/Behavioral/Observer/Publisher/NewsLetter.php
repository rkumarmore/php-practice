<?php
namespace App\Behavioral\Observer\Publisher;

use App\Behavioral\Observer\Observer\Prototype\Observer;
use App\Behavioral\Observer\Publisher\Prototype\Subject;

class NewsLetter implements Subject{

    protected $observers = array();

    public function add(Observer $observer){

        $this->observers[] = $observer;

    }
    public function remove(Observer $observer){
        unset($this->observers[$observer]);
    }
    public function notify($data){
        foreach ($observers as $key => $observer) {
            $observer->update($data);
        }
    }
}