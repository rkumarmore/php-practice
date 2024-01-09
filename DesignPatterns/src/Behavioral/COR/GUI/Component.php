<?php
namespace App\Behavioral\COR\GUI;

use App\Behavioral\COR\GUI\Container;

class Component implements ComponentHelpInterface{

    protected Container $container;
    protected $tooltipText;
    public function __construct($tooltipText = null){
        $this->tooltipText = $tooltipText;
    }
    public function showHelp(){

        if($this->tooltipText){
            echo "Shiowing tooltip text ".$this->tooltipText;
        }else{
            $this->container->showHelp();
        }
    }
}