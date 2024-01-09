<?php
namespace App\Behavioral\Command\Website\Commands;

use App\Behavioral\Command\Website\CommandContextWrapper;

class FeedbackCommand extends CommandInterface{
    public function execute(CommandContextWrapper $CommandContext){
        
        $fb = $CommandContext->getParam('feedback');
        echo "{$fb} feedback has been noted ";
        return true;
    }
}