<pre>
Given an array of size N-1 such that it only contains distinct integers in the range of 1 to N. Find the missing element.
Input:
N = 5
A[] = {1,2,3,5}
Output: 4

Input:
N = 10
A[] = {6,1,2,8,3,4,7,10,5}
Output: 9

Your Task :
You don't need to read input or print anything. Complete the function MissingNumber() that takes array and N as input  parameters and returns the value of the missing number.

<?php

$arr = [0, 2, 3, 2, 3];
$missing = [];

for ($i = 1; $i <= count($arr); $i++) {
    if ($i > count($arr) || in_array(0, $arr)) {
        echo "Wrong problem statement";
        exit();
    }
    if (!in_array($i, $arr)) $missing[] = $i;
}

echo "Missing Numbers: ";
print_r(implode(' ', $missing));
