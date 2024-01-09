<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>

<body>
  Abstraction is one of the key concepts of object-oriented programming (OOP) languages. Its main goal is to handle complexity by hiding unnecessary details from the user. That enables the user to implement more complex logic on top of the provided abstraction without understanding or even thinking about all the hidden complexity.

  Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
  When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

  So, when a child class is inherited from an abstract class, we have the following rules:

  The child class method must be defined with the same name and it redeclares the parent abstract method
  The child class method must be defined with the same or a less restricted access modifier
  The number of required arguments must be the same. However, the child class may have optional arguments in addition
  Let's look at an example:

  Example
  <?php
  // Parent class
  abstract class Car
  {
    public $name;
    public function __construct($name)
    {
      $this->name = $name;
    }
    abstract public function intro(): string;
  }

  // Child classes
  class Audi extends Car
  {
    public function intro(): string
    {
      return "Choose German quality! I'm an $this->name!";
    }
  }

  class Volvo extends Car
  {
    public function intro(): string
    {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }

  class Citroen extends Car
  {
    public function intro(): string
    {
      return "French extravagance! I'm a $this->name!";
    }
  }

  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";

  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";

  $citroen = new citroen("Citroen");
  echo $citroen->intro();
  ?>
</body>

</html>