<?php
namespace App\Behavioral\COR\Structure;

use App\Behavioral\COR\Structure\ConcreteHandler1;
use App\Behavioral\COR\Structure\ConcreteHandler2;

class Client{
    $h1 = new ConcreteHandler1();
    $h2 = new ConcreteHandler2();
    $h3 = new ConcreteHandler3();

    $h1->setNext($h2);
    $h2->setNext($h3);

    $h1->handle($request);   
}