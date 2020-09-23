<?php 
$num = 4;
print(factorial($num));

function factorial(int $num) : int
{
	if ($num == 1) {
		return $num;
	}else{
		return $num*factorial($num-1);
	}
}