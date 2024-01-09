<?php
namespace App\Behavioral\Command\Website\Commands;

use App\Behavioral\Command\Website\CommandContextWrapper;

abstract class CommandInterface{
    abstract public function execute(CommandContextWrapper $CommandContext);
}