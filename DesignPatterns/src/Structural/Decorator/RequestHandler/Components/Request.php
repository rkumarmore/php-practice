<?php
namespace App\Structural\Decorator\RequestHandler\Components;

use App\Structural\Decorator\RequestHandler\Components\RequestHelper;

class Request implements RequestHelper{
    public function process(){
        print __CLASS__ .": request will be processed here";
    }
}