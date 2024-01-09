<pre>
Traits
- traits solve PHP drawback, PHP only supports single inheritance
- Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected)
- It is not possible to instantiate a Trait on its own.
- When class override the trait function then priority of class function will be higher always.
- In case of inheritance if same function is defined in trait and baseClass then priority of Trait function will be higher
- Multiple Traits can be inserted into a class by listing them in the use statement, separated by commas.
- If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly resolved.
- To resolve naming conflicts between Traits used in the same class, the insteadof operator needs to be used to choose exactly 
    one of the conflicting methods.

See the example below.

<?php

trait first
{
    public function smallExample()
    {
        echo 'Small Example of trait first<br />';
    }
    public function bigExample()
    {
        echo 'Big Example of trait first<br />';
    }
}

trait second
{
    public function smallExample()
    {
        echo 'Small Example of trait second<br />';
    }
    public function bigExample()
    {
        echo 'Big Example of trait second<br />';
    }
}

class Talker
{
    use first, second {
        second::smallExample insteadof first;
        first::bigExample insteadof second;
    }
}


trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

trait message2
{
    public function msg2()
    {
        echo "OOP reduces code duplication!";
    }
}

class Welcome
{
    use message1;
}

class Welcome2
{
    use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>