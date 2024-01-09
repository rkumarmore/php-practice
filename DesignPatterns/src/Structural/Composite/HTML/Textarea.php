<?php

namespace App\Structural\Composite\HTML;

use App\Structural\Composite\HTML\Element;

class Textarea extends Element{

    // <textarea name="message" rows="10" cols="30">
// The cat was playing in the garden.
// </textarea>

public function render(): string{
    $textarea = "<textarea ";
    $textarea .= $this->getAttributeString();        
    $textarea .= " ></textarea>";
    return $textarea;
}

}