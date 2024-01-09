<?php
namespace App\Behavioral\Observer\Publisher\Prototype;

use App\Behavioral\Observer\Observer\Prototype\Observer;

interface Subject{
    public function add(Observer $observer);
    public function remove(Observer $observer);
    public function notify();
}