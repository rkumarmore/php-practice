<?php
namespace App\Behavioral\Command\Website;

class ClientCode{
    public function handle(){
        $controller = new ControllerInvoker();

        $context = $controller->getContext();
        // $context->setParam("action","login");
        // $context->setParam("username","raj");
        // $context->setParam("password","test");

        $context->setParam("action","feedback");
        $context->setParam("feedback","You are awesome!!!");

        $controller->invoke(); 
    }
}