<?php
// Interface definition
interface sounds {
  public function makeSound();
}
/**
 * 
 */
class Animal
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
class Cat extends Animal implements sounds {
  public function makeSound() {
    echo " Meow ";
  }
}

class Car implements sounds {
  public function makeSound() {
    echo " ZZZZZZ... ";
  }
}

class Mouse extends Animal {
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