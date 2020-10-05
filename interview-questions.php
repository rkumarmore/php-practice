<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<li>$x = true and false
	var_dump($x) <br>
	<?php $x = true and false;
	var_dump($x)
	 ?></li>
	 <li>
	 	<?php 
	 	$a = "PHP";
	 	$a = $a+1; 
	 	var_dump($a);
	 	?>
	 </li>
	 <li>
	 	$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();
$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);

<?php 
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
echo "1:"."<pre><br>";
print_r($testArray);
$testArray = array_merge($testArray, $referenceTable['val2']);
echo "2:"."<br>";
print_r($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
echo "3:"."<br>";
print_r($testArray);
 ?>
	 </li>
	 <li>
	 	Assume that var_dump(PHP_INT_MAX) will yield int(9223372036854775807).

		In that case, what will be the result of var_dump(PHP_INT_MAX + 1)? Also, what will be the result of var_dump((int)(PHP_INT_MAX + 1))?
		<?php 
			print_r(PHP_INT_MAX); echo "<br>";
			print_r(PHP_INT_MAX + 1); echo "<br>";
			print_r((int)(PHP_INT_MAX + 1));
		?>
	 </li>
	 <li>
	 	$x = NULL;

if ('0xFF' == 255) {
    $x = (int)'0xFF';
}
		<?php $x = NULL;

		if ('0xFF' == 255) {
		    $x = (int)'0xFF';
		}
		if ($x == NULL) {
			echo 'NULL';
		}else{
			echo 'Not NULL';
		}
		echo '<pre>'; print_r($x);

		 ?>
	 </li>

	</ul>
	
</body>

</html>