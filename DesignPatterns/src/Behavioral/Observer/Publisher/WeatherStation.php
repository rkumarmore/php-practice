<?php
namespace App\Behavioral\Observer\Publisher;

use App\Behavioral\Observer\Observer\Prototype\Observer;
use App\Behavioral\Observer\Publisher\Prototype\Subject;

class WeatherStation implements Subject{

    protected $observers = array();
    protected $data;
    public $temp;
    public $humidity;

    public function add(Observer $observer){
        $this->observers[] = $observer;
    }

    public function remove(Observer $observer){
        echo "Removing ".$observer->name. "<br>";
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
            echo "Removed";
        }
    }

    public function notify(){
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function publish($data) {
        $data = json_decode($data);
        $this->temp = $data->temp;
        $this->humidity = $data->humidity;
        $this->notify();
    }
}