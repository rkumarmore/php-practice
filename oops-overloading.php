Overloading in PHP
Last Updated: 01-03-2019
What is function overloading?
Function overloading is the ability to create multiple functions of the same name with different implementations.

Function overloading in PHP?
Function overloading in PHP is used to dynamically create properties and methods. These dynamic entities are processed by magic methods which can be used in a class for various action types. Function overloading contains same function name and that function preforms different task according to number of arguments. For example, find the area of certain shapes where radius are given then it should return area of circle if height and width are given then it should give area of rectangle and others. Like other OOP languages function overloading can not be done by native approach. In PHP function overloading is done with the help of magic function __call(). This function takes function name and arguments.

Property and Rules of overloading in PHP:

All overloading methods must be defined as Public.
After creating the object for a class, we can access a set of entities that are properties or methods not defined within the scope of the class.
Such entities are said to be overloaded properties or methods, and the process is called as overloading.
For working with these overloaded properties or functions, PHP magic methods are used.
Most of the magic methods will be triggered in object context except __callStatic() method which is used in a static context.
Types of Overloading in PHP: There are two types of overloading in PHP.

Property Overloading
Method Overloading
Property Overloading: PHP property overloading is used to create dynamic properties in the object context. For creating these properties no separate line of code is needed. A property associated with a class instance, and if it is not declared within the scope of the class, it is considered as overloaded property.
Following operations are performed with overloaded properties in PHP.



Setting and getting overloaded properties.
Evaluating overloaded properties setting.
Undo such properties setting.
Before performing the operations, we should define appropriate magic methods. which are,

__set(): triggered while initializing overloaded properties.
__get(): triggered while using overloaded properties with PHP print statements.
__isset(): This magic method is invoked when we check overloaded properties with isset() function
__unset(): Similarly, this function will be invoked on using PHP unset() for overloaded properties.
Example:

filter_none
edit
play_arrow

brightness_4
<?php 
  
//  
class GFG { 
      
    // Location of overloading data 
    private $data = array(); 
  
    // Overloading not used here 
    public $declared = 1; 
  
    // Overloading used when accessed 
    // outside the class 
    private $hidden = 2; 
      
    // Function definition 
    public function __set($name, $value) { 
        echo "Setting '$name' to '$value'\n"; 
        $this->data[$name] = $value; 
    } 
      
    // Function definition 
    public function __get($name) { 
        echo "Getting '$name: "; 
        if (array_key_exists($name, $this->data)) { 
            return $this->data[$name]; 
        } 
  
        $trace = debug_backtrace(); 
          
        return null; 
    } 
  
    // Function definition 
    public function __isset($name) { 
        echo "Is '$name' set?\n"; 
        return isset($this->data[$name]); 
    } 
  
    // Definition of __unset function 
    public function __unset($name) { 
        echo "Unsetting '$name'\n"; 
        unset($this->data[$name]); 
    } 
  
    // getHidden functino definition 
    public function getHidden() { 
        return $this->hidden; 
    } 
} 
  
// Create an object 
$obj = new GFG; 
  
// Set value 1 to the object variable 
$obj->a = 1; 
echo $obj->a . "\n"; 
  
// Use isset function to check 
// 'a' is set or not 
var_dump(isset($obj->a)); 
  
// Unset 'a' 
unset($obj->a); 
  
var_dump(isset($obj->a)); 
  
echo $obj->declared . "\n\n"; 
  
echo "Private property are visible inside the class "; 
echo $obj->getHidden() . "\n\n"; 
  
echo "Private property are not visible outside of class\n"; 
echo $obj->hidden . "\n"; 
  
?> 
Output:
Setting 'a' to '1'
Getting 'a: 1
Is 'a' set?
bool(true)
Unsetting 'a'
Is 'a' set?
bool(false)
1

Private property are visible inside the class 2

Private property are not visible outside of class
Getting 'hidden:
Method Overloading: It is a type of overloading for creating dynamic methods that are not declared within the class scope. PHP method overloading also triggers magic methods dedicated to the appropriate purpose. Unlike property overloading, PHP method overloading allows function call on both object and static context.
The related magic functions are,

__call() – triggered while invoking overloaded methods in the object context.
__callStatic() – triggered while invoking overloaded methods in static context.
Example:

filter_none
edit
play_arrow

brightness_4
<?php 
class GFG { 
      
      
    public function __call($name, $arguments) { 
          
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n"; 
    } 
  
      
    public static function __callStatic($name, $arguments) { 
          
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n"; 
    } 
} 
  
// Create new object 
$obj = new GFG; 
  
$obj->runTest('in object context'); 
  
GFG::runTest('in static context');  
  
?> 
Output:
Calling object method 'runTest' in object context
Calling static method 'runTest' in static context