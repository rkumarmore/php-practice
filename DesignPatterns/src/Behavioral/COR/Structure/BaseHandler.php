<?php
namespace App\Behavioral\COR\Structure;

class BaseHandler implements StructureInterface{
    protected StructureInterface $next;
    public function setNext(StructureInterface $structure){
        $this->next = $structure;
    }
    public function handle($request){

        if(!$this->next) $this->next->handle($request);
    }
}