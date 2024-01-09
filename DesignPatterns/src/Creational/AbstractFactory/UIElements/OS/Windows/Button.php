<?php 
namespace App\Creational\AbstractFactory\UIEliments\OS\Windows;

use App\Creational\AbstractFactory\UIEliments\Elements\Button as btn;

class Button implements btn{
    public function click(){
        return "Windows button was clicked";
    }
    public function view(){
        return "This is Windows button";
    }
}