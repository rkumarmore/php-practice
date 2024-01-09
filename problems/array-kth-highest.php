<?php

$arr = [
	1, 9, 3, 2, 10, 7, 7, 9
];

$highest = 0;
$secondhighest = 0;


/*Arraywalk*/
$start = microtime(true);
array_walk($arr, 'getSecondHighest');

function getSecondHighest($value)
{
	global $highest, $secondhighest;

	if ($value > $highest) {
		$secondhighest = $highest;
		$highest = $value;
	} elseif ($value > $secondhighest && $value < $highest) {
		$secondhighest = $value;
	}
}
$end = microtime(true);
$time = $end - $start;
echo '<br>' . 'Highest ' . $highest;
echo '<br>';
echo 'secondhighest ' . $secondhighest;
echo '<br>';
echo "Time taken for array_walk : " . '<br>';
printf("%0.9fs", $time);
echo '<br>' . "Time taken for foreach : " . '<br>';

$highest = 0;
$secondhighest = 0;
$start = microtime(true);
/*Foreach*/
foreach ($arr as $value) {
	if ($value > $highest) {
		$secondhighest = $highest;
		$highest = $value;
	} elseif ($value > $secondhighest && $value < $highest) {
		$secondhighest = $value;
	}
}
$end = microtime(true);
$time = $end - $start;
printf("%0.9fs", $time);

echo '<br>' . 'Highest ' . $highest;
echo '<br>';
echo 'secondhighest ' . $secondhighest;
echo '<br>';
