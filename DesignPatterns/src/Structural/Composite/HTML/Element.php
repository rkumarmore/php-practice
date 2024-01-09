<?php

namespace App\Structural\Composite\HTML;

abstract class Element{
    public $attributes = [];
    public function setAttribute($name, $value): void{
        $this->attributes[$name] =  $value;
    }
    public function getAttribute($name): string{
        return $this->attributes[$name];
    }

    public function getAttributeString(): string{
        $attr = '';
        foreach($this->attributes as $key => $value){
            $attr .= $key ."=\"". $value ."\" ";
        } 
        return $attr;
    }

    public abstract function render(): string;

}