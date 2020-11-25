<?php 
$num = 2;
print(factorial($num));

function factorial(int $num) : int
{
	// echo $num."<br>";
	if ($num <= 1) {
		return 1;
	}else{
		return $num*factorial($num-1);
	}
}