<?php
// Interface definition
interface Animal {
  public function makeSound();
}
/**
 * 
 */
class test
{ 
  private $name;
  
  function __construct($name)
  {
    $this->name = $name;
  }
    
  public function get_name()
  {
      return $this->name;
  }
}

// Class definitions
class Cat extends test implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat('tiger');
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

echo '<pre>'; print_r($cat->get_name()); exit();
?>
Example Explain