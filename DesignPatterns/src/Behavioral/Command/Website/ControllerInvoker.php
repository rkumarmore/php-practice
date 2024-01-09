<?php
namespace App\Behavioral\Command\Website;

use App\Behavioral\Command\Website\CommandFactoryClient;
use App\Behavioral\Command\Website\CommandContextWrapper;

class ControllerInvoker{
    private $context;
    private $command;
    public function __construct() {
        $this->context = new CommandContextWrapper();
    }
    public function getContext() {
        return $this->context;
    }
    public function invoke() {
        $action = $this->context->getParam('action');
        $this->command = CommandFactoryClient::getCommand($action);
        if($this->command->execute($this->context)){
            echo 'Comand was successful';
        }else{
            echo 'Command was failed';
        }
    }
}