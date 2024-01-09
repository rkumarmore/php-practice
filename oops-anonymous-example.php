<?php
interface attributes
{
	public function area(array $params, $units);
	// public function volume(array $params, $units);
}

class calculator
{
	private $attributes;
	function getAttribute(): attributes
	{
		return $this->attributes;
	}

	function setAttribute(attributes $attributes)
	{
		$this->attributes = $attributes;
	}
}

$rect = new  calculator();

$rect->setAttribute(new class implements attributes
{
	public function area(array $params, $units)
	{
		if (count($params) != 2) {
			echo 'Rectangle requires lenth and width. Please check your input';
			exit();
		}
		echo 'Area of rectangle is ' . $params[0] * $params[1] . ' ' . 'square ' . $units . '<br>';
	}
});



$triangle = new  calculator();

$triangle->setAttribute(new class implements attributes
{
	public function area(array $params, $units)
	{
		if (count($params) != 2) {
			echo 'Rectangle requires lenth and width. Please check your input';
			exit();
		}
		echo 'Area of Triangle is ' . ($params[0] * $params[1] / 2) . ' ' . 'square ' . $units . '<br>';
	}
});

$rect->getAttribute()->area(array(3, 4), 'meter');
$triangle->getAttribute()->area(array(3, 4), 'meter');

//Example 2

interface MyInterface
{
}
$acl = new class implements MyInterface
{
	public function sayHello()
	{
		echo "Hello!";
	}
};
$acl->sayHello();


// Example 3
$ac = new class("Educative")
{
	private $name;
	public function __construct(string $name)
	{
		$this->name = $name;
	}
	public function sayHelloTo()
	{
		echo "Hello, " . $this->name . "!\n";
	}
};

$ac->sayHelloTo();
var_dump(get_class($ac));
