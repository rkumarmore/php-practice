<?php 

$name = [
    1,3,2,9,7,7,9
];	

$highest=0;
$secondhighest = 0;

foreach ($name as $value) {
	if ($value > $highest) {
		$secondhighest = $highest;
		$highest = $value;
	}elseif ($value > $secondhighest && $value < $highest) {
		$secondhighest = $value;
	}
}

echo 'Highest '.$highest;echo '<br>';
echo 'secondhighest '.$secondhighest;echo '<br>';