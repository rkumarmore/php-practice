<?php
trait Trait1
{
    public function foo()
    {
        echo "Trait1::foo";
    }
}
class MyClass
{
    public function foo()
    {
        echo "MyClass::foo";
    }
    use Trait1 {
        Trait1::foo insteadof MyClass;
    }
}

$obj = new MyClass();
$obj->foo(); // Output: Trait1::foo
