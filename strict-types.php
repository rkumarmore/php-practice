<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>Scalar and Return type declarations, have been introduced. Declaration has two options −

coercive - coercive is default mode and need not to be specified. <br>

strict - strict mode has to explicitly hinted.<br>

Following types for function parameters can be enforced using the above modes − <br>	

int
float
bool
string
interfaces
array
callable</p>
<code>/*Scalar Type declarations */
function sum(int ...$ints) {
  return array_sum($ints);
}
// print(sum(2, '3', 4.1, 5));
print(sum(2, '3', 4.1, 5));


/*Return Type declarations */
function returnIntValue(int $value): int {
      return $value;
}
   print(returnIntValue(5));</code>
</body>
</html>
<?php 
/*Scalara Type declarations */
// declare(strict_types=1);
function sum(int ...$ints) {
  return array_sum($ints);
}
// print(sum(2, '3', 4.1, 5));
print(sum(2, '3', 4.1, 5));


/*Return Type declarations */
function returnIntValue(int $value): int {
      return $value;
}
   print(returnIntValue(5));