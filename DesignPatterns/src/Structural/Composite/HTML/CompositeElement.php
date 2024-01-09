<?php

namespace App\Structural\Composite\HTML;

use App\Structural\Composite\HTML\Element;

abstract class CompositeElement extends Element{
    public $elements = [];
    public function addElement(Element $element): void{
        $this->elements[] = $element;
    }
    public function removeElement(Element $element): void{
        $this->elements = array_filter($this->elements, function($form_element) use($element){
            return $form_element != $element;
        });
    }

    public function getElementsString(): string{
        $e = '';
        foreach($this->elements as $element){
            $e .= $element->render();
            $e .= "<br>";
        }
        return $e;
    }
}