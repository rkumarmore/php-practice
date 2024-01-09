<?php
namespace App\Structural\Decorator\RequestHandler\Addons;

use App\Structural\Decorator\RequestHandler\Components\RequestHelper;

class RequestDecorator implements RequestHelper{
    protected $requestHelper;
    public function __construct(RequestHelper $requestHelper){
        $this->requestHelper = $requestHelper;
    }
    public function process(){
        print __CLASS__ .": request will be processed here";
        $this->requestHelper->process();
    }
}