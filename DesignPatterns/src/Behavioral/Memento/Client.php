<?php
namespace App\Behavioral\Memento;

use App\Behavioral\Memento\Memento\Snapshot;
use App\Behavioral\Memento\Originator\Editor;

class Client {

    public function handle(){

        $caretaker = new CareTaker();

        $editor = new Editor();
        $editor->setText('Testing the editor');
        $editor->setX(1);
        $editor->setY(100);
        $editor->backup();
        $caretaker->makeBackup($editor);

        $editor = new Editor();
        $editor->setText('Testing the editor second');
        $editor->setX(2);
        $editor->setY(100);
        $editor->backup();
        $caretaker->makeBackup($editor);
        
        $editor = new Editor();
        $editor->setText('Testing the editor third');
        $editor->setX(3);
        $editor->setY(100);
        $editor->backup();
        $caretaker->makeBackup($editor);

        echo "<pre>";

        print_r($caretaker);


        $snapshot = $caretaker->undo();
        // print_r($snapshot);

        echo  $snapshot->originator->text;

        $snapshot = $caretaker->undo();
        // print_r($snapshot);
        echo  $snapshot->originator->text;

    }
}