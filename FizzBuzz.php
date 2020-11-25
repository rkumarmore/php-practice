<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	Write a program that, given a number n from STDIN, prints out all numbers from 1 to n (inclusive) to STDOUT, each on their own line. But there's a catch:

For numbers divisible by 3, instead of n, print Fizz
For numbers divisible by 5, instead of n, print Buzz
For numbers divisible by 3 and 5, just print FizzBuzz
For example, given the input 1, your program should output:
<br>
<?php 

$input = 15;
$n = 1;

while ($n <= $input) {

	if ($n%3 == 0 && $n%5 == 0) {
		echo 'FizzBuzz'.'<br>';
	}elseif($n%5 == 0){
		echo 'Buzz'.'<br>';
	}elseif($n%3 == 0){
		echo 'Fizz'.'<br>';
	}else{
		echo $n.'<br>';
	}

	$n++;
}
?>
</body>
</html>


