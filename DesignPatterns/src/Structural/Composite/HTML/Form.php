<?php

namespace App\Structural\Composite\HTML;

use App\Structural\Composite\HTML\Element;

class Form extends CompositeElement{
    public function render(): string{
        $form = "<form>";
        $form .= $this->getElementsString();
        $form .= "<form>";
        return $form;
    }

}