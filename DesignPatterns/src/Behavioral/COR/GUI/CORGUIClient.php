<?php
namespace App\Behavioral\COR\GUI;

use App\Behavioral\COR\GUI\Panel;
use App\Behavioral\COR\GUI\Dialog;

class CORGUIClient{

    public function createGUI(){
        $dialog = new Dialog("WIKI URL");
        $panel = new Panel("This is panel");
        $ok = new Button("Button OK");
        $cancel = new Button("Button Cancel");

        $panel->addChild($ok);
        $panel->addChild($cancel);
        $dialog->addChild($panel);

        echo $ok->showHelp(); echo "<br>";
        echo $cancel->showHelp(); echo "<br>";
        echo $panel->showHelp(); echo "<br>";
        echo $dialog->showHelp(); echo "<br>";
    }
 
}