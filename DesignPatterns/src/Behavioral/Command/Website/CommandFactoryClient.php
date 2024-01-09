<?php
namespace App\Behavioral\Command\Website;

use App\Behavioral\Command\Website\Commands\CommandInterface;

class CommandFactoryClient{
    public static function getCommand(string $action) : CommandInterface{        
       $class = __NAMESPACE__."\\Commands\\".ucfirst(strtolower($action))."Command";
       return new $class();
    }
}