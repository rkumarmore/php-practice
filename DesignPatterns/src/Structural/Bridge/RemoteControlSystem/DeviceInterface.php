<?php

namespace App\Structural\Bridge\RemoteControlSystem;

interface DeviceInterface
{
    public function isEnabled();
    public function enable();
    public function disable();
    public function getVolume();
    public function volumeUp();
    public function volumeDown();
    public function getChannel();
    public function setChanel($channel);
    public function togglePower();
}
