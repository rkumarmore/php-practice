<?php 
namespace App\Structural\Adapter;

//Adaptee/Service class - Thirdpaty class
class WhatsAppShare{
    //Special request
    public function waShare(String $string){
        echo " Share data via WhatsApp ' $string ' \n";
    }
}