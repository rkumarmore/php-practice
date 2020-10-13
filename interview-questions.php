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
		<li>
			PHP will compare alpha strings using the greater than and less than comparison operators based upon alphabetical order. <br>
			$a= 'red'; $b='blue'; echo $a>$b <br>
			<?php 
			$a= 'z'; $b='yasdfasdfasdfz'; 
			echo $a>$b;
			?>
		</li>
		<li>
			$x = 4 & 1;

			<?php $x = 4 & 1;


			var_dump($x);
			 ?>
		</li>
		<li>$x = true and false
	var_dump($x) <br>
	<?php $x = true and false;

			if(true and false){
				echo "IF";
			}
	var_dump($x)
	 ?></li>
	 <li>
	 	$a = "PHP";
	 	$a = $a+1; 
	 	var_dump($a);
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
var_dump($testArray); <br>

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

		In that case, what will be the result of <br>
		var_dump(PHP_INT_MAX + 1)? <br>
		Also, what will be the result of <br>
		var_dump((int)(PHP_INT_MAX + 1))? <br>
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

	 <li>
	 	var_dump(0123 == 123); <br><?php var_dump(0123 == 123);?>
<br>var_dump('0123' == 123);<br>
<?php var_dump(0123 == 123); ?>
<br>var_dump('0123' === 123);<br>
<?php var_dump('0123' === 123); ?>
	 </li>
	 <li>
	 	$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}<br>
<?php 
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}

 ?>
	 </li>
	 <li>
$a = '1';
$b = &$a;
$b = "2$b";<br>
<?php $a = '1';
$b = &$a;
$b = "2$b";

var_dump($a); echo "<br>";
var_dump($b);
 ?>
	 </li>
	 <li>
	 	$x = 3 + "15%" + "$25"
	 	<?php $x = 3 + "15%" + "$25";

	 	var_dump($x) ?>
	 </li>

	</ul>
	
</body>

</html>