The var_dump() function displays structured information about variables/expressions including its type and value.
The print_r() displays information about a variable in a way that's readable by humans.

<?php

$arr = ['test', 45, True];
echo "<pre>";
var_dump($arr);

print_r($arr);
