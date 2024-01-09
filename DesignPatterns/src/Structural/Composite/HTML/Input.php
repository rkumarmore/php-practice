<?php

namespace App\Structural\Composite\HTML;

use App\Structural\Composite\HTML\Element;

class Input extends Element{
    // <input type="text" id="fname" name="fname">
    //<input type="radio" id="javascript" name="fav_language" value="JavaScript">
    //<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    public function render(): string{
        $input = "<input ";
        $input .= $this->getAttributeString();       
        $input .= ">";
        return $input;
    }
}