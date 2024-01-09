<?php 
namespace App\Creational\AbstractFactory\UIEliments\OS\Windows;

use App\Creational\AbstractFactory\UIEliments\Elements\Checkbox as cb;

class Checkbox implements cb{
    public function check(){
        return "Windows checkbox was checked";
    }
    public function uncheck(){
        return "Windows checkbox was unchecked";
    }
}