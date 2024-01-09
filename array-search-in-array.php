in_array ():checks if a value exists in array.
array_search ():searches an array for a given value and returns the corresponding key if successful.
<br>
<?php

$properties = [
    'name' => 'Black duppatta',
    'color' => 'black'
];
echo $properties[array_search('black', $properties)];
echo "<pre>";
print_r($properties);

if (in_array('black', $properties)) {
    echo 'Yes';
} else {
    die('OOOH No!!!');
}
