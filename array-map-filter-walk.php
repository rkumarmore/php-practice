Changing Values:
array_map cannot change the values inside input array(s) while array_walk can;
array_map never changes its arguments.

Array Keys Access:
array_map cannot operate with the array keys, array_walk can.

Return Value:
array_map returns a new array,
array_walk only returns true. Hence, if you don't want to create an array as a result of traversing one array, you should use array_walk.

Iterating Multiple Arrays:
array_map also can receive an arbitrary number of arrays and it can iterate over them in parallel,
array_walk operates only on one.

Passing Arbitrary Data to Callback:
array_walk can receive an extra arbitrary parameter to pass to the callback. This mostly irrelevant since PHP 5.3 (when anonymous functions were introduced).

Length of Returned Array:
The resulting array of array_map has the same length as that of the largest input array;
array_walk does not return an array but at the same time it cannot alter the number of elements of original array;


<pre>
array_walk($array, 'walk', 'test')
- Does not change the value (Value will be changed if passed by reference)
- Returns TRUE
- Key access
- Can receive an extra arbitrary parameter to pass to the callback
<code>

function walk(&$value, $key, $param)
{
	// echo 'Walk - ';
	// echo 'Key is: '.$key.' Value is: '.$value.' Parameter is:'.$param
	//Value can be modified
	$value+=$value;
}
</code>
array_map ('map', $array)
- Does not change value
- No Key access
- Returns array

<code>

function map($value)
{
	// echo 'Map - '; 	echo 'Value is: '.$value;
	return $value*$value;

}
</code>
array_filter:
-Filters the values of an array using a callback function. 
-If the callback function returns true then the current value of the array is returned into the result array otherwise not.
-It does preserve the keys.
<code>
function filter($value)
{
	return ($value & 1);
}
$array = [1,2,3,4];

print_r(array_map('map', $array));
print_r(array_filter($array, 'filter'));

if(print_r(array_walk($array, 'walk', 'test')))
	print_r($array);
else
	die('Walk failed');
</code>

</pre>
<?php
function walk($value, $key, $param)
{	// echo 'Walk - ';
	echo 'Key is: ' . $key . ' Value is: ' . $value . ' Parameter is:' . $param . "<br>";
	//Value can be modified if reference is passed
	return $value += $value;
}

function map($value)
{	// echo 'Map - '; 	echo 'Value is: '.$value;
	return $value * $value;
}

function filter($value)
{
	return ($value & 1);
}
$array = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

echo '<pre>Map<br>';
print_r(array_map('map', $array));
echo '<pre>Filter<br>';
print_r(array_filter($array, 'filter'));
echo '<pre>Walk<br>';
if (print_r(array_walk($array, 'walk', 'test')))
	print_r($array);
else
	die('Walk failed');
