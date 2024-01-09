A Class Simple Creates the object and you want to use that object, Following example will explain about factory design pattern.
The main difficulty with factory pattern is it will increase the complexity and it is not reliable for good programmers


One of the most commonly used design patterns is the factory pattern. In this pattern, a class simply creates the object you want to use. Consider the following example of the factory pattern:

This code uses a factory to create the Automobile object. There are two possible benefits to building your code this way; the first is that if you need to change, rename, or replace the Automobile class later on you can do so and you will only have to modify the code in the factory, instead of every place in your project that uses the Automobile class. The second possible benefit is that if creating the object is a complicated job you can do all of the work in the factory, instead of repeating it every time you want to create a new instance.

Using the factory pattern isn’t always necessary (or wise). The example code used here is so simple that a factory would simply be adding unneeded complexity. However if you are making a fairly large or complex project you may save yourself a lot of trouble down the road by using factories.

class Automobile {
private $bikeMake;
private $bikeModel;

public function __construct($make, $model) {
$this->bikeMake = $make;
$this->bikeModel = $model;
}

public function getMakeAndModel() {
return $this->bikeMake . ' ' . $this->bikeModel;
}
}

class AutomobileFactory {
public static function create($make, $model) {
return new Automobile($make, $model);
}
}

$pulsar = AutomobileFactory::create('ktm', 'Pulsar');
print_r($pulsar->getMakeAndModel());

class Automobile {
private $bikeMake;
private $bikeModel;

public function __construct($make, $model) {
$this->bikeMake = $make;
$this->bikeModel = $model;
}

public function getMakeAndModel() {
return $this->bikeMake . ' ' . $this->bikeModel;
}
}

class AutomobileFactory {
public static function create($make, $model) {
return new Automobile($make, $model);
}
}
t$pulsar = AutomobileFactory::create('ktm', 'pulsar');

print_r($pulsar->getMakeAndModel());


<?php
class Automobile
{
   private $bikeMake;
   private $bikeModel;

   public function __construct($make, $model)
   {
      $this->bikeMake = $make;
      $this->bikeModel = $model;
   }

   public function getMakeAndModel()
   {
      return $this->bikeMake . ' ' . $this->bikeModel;
   }
}

class AutomobileFactory
{
   public static function create($make, $model)
   {
      return new Automobile($make, $model);
   }
}

$pulsar = AutomobileFactory::create('ktm', 'Pulsar');
print_r($pulsar->getMakeAndModel());

class Automobile
{
   private $bikeMake;
   private $bikeModel;

   public function __construct($make, $model)
   {
      $this->bikeMake = $make;
      $this->bikeModel = $model;
   }

   public function getMakeAndModel()
   {
      return $this->bikeMake . ' ' . $this->bikeModel;
   }
}

class AutomobileFactory
{
   public static function create($make, $model)
   {
      return new Automobile($make, $model);
   }
}
$pulsar = AutomobileFactory::create('ktm', 'pulsar');

print_r($pulsar->getMakeAndModel());
?>