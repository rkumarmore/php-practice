<?php
namespace App\Behavioral\COR\Structure;

interface StructureInterface{
    public function setNext(StructureInterface $structure);
    public function handle($request);
}