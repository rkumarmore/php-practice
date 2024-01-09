<?php
namespace App\Behavioral\Command\Website\Commands;

use App\Behavioral\Command\Website\CommandContextWrapper;

class LoginCommand extends CommandInterface{
    public function execute(CommandContextWrapper $CommandContext){
        
        $username = $CommandContext->getParam('username');
        $pass = $CommandContext->getParam('password');

        if($username != 'raj' | $pass != 'test'){
            $CommandContext->setError('Login failed');
            echo "Login was failed";
            return false;
        }else{
            $CommandContext->setParam('user', $username);
            echo 'Login was successful';
        }
        return true;
    }
}