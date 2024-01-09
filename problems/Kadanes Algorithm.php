<pre>
Given an array Arr[] of N integers. Find the contiguous sub-array(containing at least one number) which has the maximum sum and return its sum.

Input:
N = 5
Arr[] = {1,2,3,-2,5}
Output:
9
Explanation:
Max subarray sum is 9
of elements (1, 2, 3, -2, 5) which 
is a contiguous subarray.

Input:
N = 4
Arr[] = {-1,-2,-3,-4}
Output:
-1
Explanation:
Max subarray sum is -1 
of element (-1)

Your Task:
You don't need to read input or print anything. The task is to complete the function maxSubarraySum() which takes Arr[] and N as input parameters and returns the sum of subarray with maximum sum.

<?php
$a = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
$a = [1, 2, 3, -2, 5];
$a = [-1, -2, -3, -4];


$s = array_sum($a);
// echo "Sum " . $s . "<br>";
$n = count($a);

print_r(subarraySum($a, $n, $s));


function subarraySum(array $arr, int $n, int $s)
{
    $indexes = [];
    $largest = PHP_INT_MIN;
    for ($i = 0; $i <= $n; $i++) {
        for ($j = $i + 1; $j <= $n; $j++) {
            $cont_cum = array_sum(array_slice($arr, $i, $j));
            if ($cont_cum >  $largest) {
                $largest = $cont_cum;
                // echo "cont_cum " . $cont_cum . " Index i=$i j=$j" . "<br>";
                $x = $i;
                $y = $j;
            }
        }
    }
    return array_slice($arr, $x, $y);
}
