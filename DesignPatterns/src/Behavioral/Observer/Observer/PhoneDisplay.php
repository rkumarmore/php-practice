<?php
namespace App\Behavioral\Observer\Observer;

use App\Behavioral\Observer\Publisher\WeatherStation;
use App\Behavioral\Observer\Observer\Prototype\Observer;

class PhoneDisplay implements Observer{

    public $name;

    public function __construct(WeatherStation $weatherStation, $name) {
        $this->weatherStation = $weatherStation;
        $this->name = $name;
    }
    
    // public function update($data){

    //     $data = json_decode($data);

    //     echo "Dispalyed on phone ". $this->name ."<br>";
    //     echo "Temperature is {$data->temp} <br>";
    //     echo "Humidity is {$data->humidity} <br>";
    // }

    public function update(){

        echo "Dispalyed on phone ". $this->name ."<br>";
        echo "Temperature is {$this->weatherStation->temp} <br>";
        echo "Humidity is {$this->weatherStation->humidity} <br>";
    }
}