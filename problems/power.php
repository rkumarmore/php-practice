<pre>

<?php

echo userPower(5, -2); //0.04
echo userPower(5, 2); //125

function userPower(int $base, int $power)
{
    $pow =  $power < 0 ? abs($power) : $power;
    $x = $y = $base;
    for ($i = 1; $i < $pow; $i++) {
        for ($j = 1; $j < $base; $j++) {
            $x += $y;
        }
        $y = $x;
    }
    return $power < 0 ? 1 / $y : $y;
}

// echo pow(5, 0.25);


// Works only if a >= 0
// and b >= 0
// function poww($a, $b)
// {
//     if ($b == 0)
//         return 1;
//     $answer = $a;
//     $increment = $a;

//     for ($i = 1; $i < $b; $i++) {
//         for ($j = 1; $j < $a; $j++) {
//             $answer += $increment;
//         }
//         $increment = $answer;
//     }
//     return $answer;
// }

// // Driver Code
// echo (poww(5, 3));
  
// This code is contributed by nitin mittal.
