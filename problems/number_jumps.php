<pre>
Given an array of N integers arr[] where each element represents the max length of the jump that can be made forward from that element. Find the minimum number of jumps to reach the end of the array (starting from the first element). If an element is 0, then you cannot move through that element.

Note: Return -1 if you can't reach the end of the array.

Input:
N = 11
arr[] = {1, 3, 5, 8, 9, 2, 6, 7, 6, 8, 9}
Output: 3
Explanation:
First jump from 1st element to 2nd
element with value 3. Now, from here
we jump to 5th element with value 9,
and from here we will jump to the last.

Input :
N = 6
arr = {1, 4, 3, 2, 6, 7}
Output: 2
Explanation:
First we jump from the 1st to 2nd element
and then jump to the last element.


<?php
$arr = [1, 1, 1, 2, 6, 7];
// $arr = [1, 3, 5, 8, 9, 2, 6, 7, 6, 8, 9];
$n = count($arr);
$jumps = 0;
jump($arr, 0, $arr[0]);
echo "Result Jumps: $jumps";

function jump($arr, $i, $l)
{
    global $jumps;
    $jumps++;
    $jump = $i + $l;
    if ($jumps > PHP_INT_MAX) return -1;
    if (!isset($arr[$jump]))
        return $jumps;
    jump($arr, $jump, $arr[$jump]);
}
