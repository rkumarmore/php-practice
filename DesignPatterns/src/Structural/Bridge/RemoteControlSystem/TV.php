<?php

namespace App\Structural\Bridge\RemoteControlSystem;

use App\Structural\Bridge\RemoteControlSystem\DeviceInterface;

class TV implements DeviceInterface
{
    private $power_on = false;
    private $isEnabled = false;
    public function isEnabled(){
        return false;
    }
    public function enable(){
        return "TV Enabled";
    }
    public function disable(){
        return "TV disabled";
    }
    public function getVolume(){
        return "TV Volume";
    }
    public function volumeUp(){
        return "TV Volume UP";
    }
    public function volumeDown(){
        return "TV Volume Down";
    }
    public function getChannel(){

        return "TV Channel";

    }
    public function setChanel($channel){

        return "Set TV Channel";

    }
    public function togglePower(){
        if ($this->power_on == false) {
            $this->power_on = true;
            print("TV Power on");
        }
        else {
            $this->power_on = false; 
            print("TV Power off");
        }         
        
        return $this->power_on;

    }
}
