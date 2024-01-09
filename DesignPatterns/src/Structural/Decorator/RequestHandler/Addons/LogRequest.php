<?php
namespace App\Structural\Decorator\RequestHandler\Addons;

use App\Structural\Decorator\RequestHandler\Addons\RequestDecorator;

class LogRequest extends RequestDecorator{
    public function process(){
        print __CLASS__ .": request will be processed here";
        $this->requestHelper->process();
    }
}