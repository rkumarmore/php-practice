<?php
namespace App\Behavioral\COR\GUI;

class Container extends Component{
    protected $children = [];
    public function addChild(Component $child){
        $child->container = $this;
        $this->children[] = $child;

    }
}