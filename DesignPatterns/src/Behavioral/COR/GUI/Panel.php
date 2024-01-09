<?php
namespace App\Behavioral\COR\GUI;

use App\Behavioral\COR\GUI\Container;

class Panel extends Container{
    protected $modalHelpText = null;
    public function __construct($modalHelpText = null){
        $this->modalHelpText = $modalHelpText;
    }
    public function showHelp(){
        if($this->modalHelpText){
            echo "Displaying modal Help text: ".$this->modalHelpText;
        }else{
            parent::showHelp();
        }
    }
}