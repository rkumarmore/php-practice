- An interface consists of methods that have no implementations, which means the interface methods are abstract methods.
- All the methods in interfaces must have public visibility scope.
- Interfaces are different from classes as the class can inherit from one class only whereas the class can implement one or more interfaces by listing them after implements statement, separated by commas.

<?php
// Interface definition
interface sounds
{
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
class Cat extends Animal implements sounds
{
  public function makeSound()
  {
    echo " Meow ";
  }
}

class Car implements sounds
{
  public function makeSound()
  {
    echo " ZZZZZZ... ";
  }
}

class Mouse extends Animal
{
  public function makeSound()
  {
    echo " Squeak ";
  }
}
class Dog extends Animal
{
  public function makeSound()
  {
    echo " bow ";
  }
}

// Create a list of animals
$cat = new Cat('tiger');
$dog = new Dog('puppy');
$mouse = new Mouse('cat');
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach ($animals as $animal) {
  $animal->makeSound();
}

echo '<pre>';
print_r($cat->get_name());
exit();
