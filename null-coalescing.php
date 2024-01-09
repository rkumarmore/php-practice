<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
	Replaced the ternary operation in conjunction with isset() function.
	The Null coalescing operator returns its first operand if it exists and is not NULL otherwise it returns its second operand.
</body>

</html>
<?php

$col = NULL;
$test = $col ?? 'wrong';
echo $test;
