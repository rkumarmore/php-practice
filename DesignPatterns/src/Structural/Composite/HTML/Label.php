<?php

namespace App\Structural\Composite\HTML;

use App\Structural\Composite\HTML\Element;

class Label extends Element{

    //<label for="fname">First name:</label><br>
    public function render(): string{
        $label = "<label ";
        $label .= $this->getAttributeString();   
        $label .= ">";
        $label .= $this->getAttribute('value'); 
        $label .= "</label>";
        return $label;
    }

}