<b>array_slice(array, start, length, preserve)
	function returns selected parts of an array.</b>	

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));

$a=array('color1'=>"red",'color2'=>"green",'color3'=>"blue",'color4'=>"yellow",'color5'=>"brown");
print_r(array_slice($a,2));

print_r($a);

<b>array_splice(array, start, length, array)</b>
The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.
If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter

$a=array("red","green","blue","yellow","brown");
print_r(array_splice($a,2));

print_r($a);

$a=array('color1'=>"red",'color2'=>"green",'color3'=>"blue",'color4'=>"yellow",'color5'=>"brown");
$a2=array("a"=>"purple","b"=>"orange", 'c'=>'blue');
print_r(array_splice($a,2,2,$a2));

print_r($a);
<?php 
echo "<pre>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));

$a=array('color1'=>"red",'color2'=>"green",'color3'=>"blue",'color4'=>"yellow",'color5'=>"brown");
print_r(array_slice($a,2));

print_r($a);
$a=array("red","green","blue","yellow","brown");
print_r(array_splice($a,2));

print_r($a);

$a=array('color1'=>"red",'color2'=>"green",'color3'=>"blue",'color4'=>"yellow",'color5'=>"brown");
$a2=array("a"=>"purple","b"=>"orange", 'c'=>'blue');
print_r(array_splice($a,2,2,$a2));

print_r($a);
