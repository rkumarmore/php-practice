<?php
namespace App\Behavioral\COR\GUI;

use App\Behavioral\COR\GUI\Container;

class Dialog extends Container{
    protected $wikiPageURL = null;
    public function __construct($wikiPageURL = null){
        $this->wikiPageURL = $wikiPageURL;
    }
    public function showHelp(){
        if($this->wikiPageURL){
            echo "Redirecting to wiki page ".$this->wikiPageURL;
        }else{
            parent::showHelp();
        }
    }
}