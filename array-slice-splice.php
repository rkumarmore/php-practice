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
