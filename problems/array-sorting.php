Sort $values = [45,2,6,85,94,94,3,8,153];
<?php

// $values = [-2, 45, 2, 6, 85, 94, 94, 3, 8, 153, -1];
$values = [0, 2, 1, 2, 0];

$sorted_values = [];

while (count($values) > 0) {
	$highest = PHP_INT_MAX;
	foreach ($values as $key => $value) {
		if ($value < $highest) {
			$highestkey = $key;
			$highest = $value;
		}
	}
	unset($values[$highestkey]);
	$sorted_values[] = $highest;
}
$values = $sorted_values;
unset($sorted_values);

echo '<pre>';
print_r($values);
