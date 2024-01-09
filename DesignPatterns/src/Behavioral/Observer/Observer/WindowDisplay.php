<?php
namespace App\Behavioral\Observer\Observer;

use App\Behavioral\Observer\Observer\Prototype\Observer;

class WindowDisplay implements Observer{

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
    
    public function update($data){

        $data = json_decode($data);

        echo "Dispalyed on window ". $this->name;
        echo "Temperature is {$data['temp']} <br>";
        echo "Humidity is {$data['humidity']} <br>";
    }
}