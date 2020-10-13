<?php 
$num = 4;
print(factorial($num));

function factorial(int $num) : int
{
	// echo $num."<br>";
	if ($num == 1) {
		return $num;
	}else{
		return $num*factorial($num-1);
	}
}