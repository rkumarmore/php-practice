<?php

namespace App\Structural\Bridge\RemoteControlSystem;

use App\Structural\Bridge\RemoteControlSystem\DeviceInterface;

class Radio implements DeviceInterface
{
    private $power_on = false;
    private $isEnabled = false;
    public function isEnabled(){
        return false;
    }
    public function enable(){
        return "Radio Enabled";
    }
    public function disable(){
        return "Radio disabled";
    }
    public function getVolume(){
        return "Radio Volume";
    }
    public function volumeUp(){
        return "Radio Volume UP";
    }
    public function volumeDown(){
        return "Radio Volume Down";
    }
    public function getChannel(){

        return "Radio Channel";

    }
    public function setChanel($channel){

        return "Set Radio Channel";

    }
    public function togglePower(){
        if ($this->power_on == false) {
            $this->power_on = true;
            print("Radio Power on");
        }
        else {
            $this->power_on = false; 
            print("Radio Power off");
        }         
        
        return $this->power_on;

    }
}
