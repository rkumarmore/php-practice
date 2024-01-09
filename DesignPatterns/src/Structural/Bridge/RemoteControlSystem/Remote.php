<?php

namespace App\Structural\Bridge\RemoteControlSystem;

use App\Structural\Bridge\RemoteControlSystem\DeviceInterface;

class Remote
{
    public $device;
    public function __construct(DeviceInterface $device)
    {
        $this->device = $device;
    }

    public function getDevice(): DeviceInterface{
        return $this->device;       
    }

    function togglePower() {
            $this->device->togglePower();
    }

    function volumeUp() {
        $this->device->volumeUp();
    }
    
    public function isEnabled(){
        return $this->device->isEnabled();
    }
    public function enable(){
        $this->device->enable();
    }
    public function disable(){
        $this->device->disable();
    }
    public function getVolume(){
        return $this->device->getVolume();
    }
    public function volumeDown(){
        $this->device->volumeDown();
    }
    public function getChannel(){
        return $this->device->getChannel();
    }
    public function setChanel($channel){
        $this->device->setChanel($channel);
    }
}
