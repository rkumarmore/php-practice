<?php 
interface attributes {
	public function area(array $params, $units);
}

/**
 * Rectangle
 */
class calculator
{
	private $attributes;
   function getAttribute() : attributes{
   		return $this->attributes;
   }

   function setAttribute($attributes)
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
    	echo 'Area of rectangle is '.$params[0]*$params[1].' '.'square '.$units.'<br>';    	
    }
});



$triangle = new  calc();

$triangle->setAttribute(new class implements calculator
{
    public function area(array $params, $units)
    {
    	if (count($params) != 2) {
    		echo 'Rectangle requires lenth and width. Please check your input';
    		exit();
    	}
    	echo 'Area of Triangle is '.($params[0]*$params[1]/2).' '.'square '.$units.'<br>';    	
    }
});

$rect->getAttribute()->area(array(3,4),'meter');
$triangle->getAttribute()->area(array(3,4),'meter');