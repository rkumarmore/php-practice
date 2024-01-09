<?php

function findLastKey(array $array, $value)
{
    foreach ($array as $k => $v) {
        if ($v == $value) $rk = $k;
    }
    return $k;
}

echo findLastKey(array('Hello' => 'Green',  'village' => 'Blue', 'World' => 'Blue',), 'Blue');

// function filterNumbersFromArray(array &$arr): void
// {
//     foreach ($arr as $key => $value) {
//         if (!is_int($value)) unset($arr[$key]);
//     }
// }

// $arr = [1, 'a', 'b', 2];
// filterNumbersFromArray($arr);
// print_r(array_values($arr));

// namespace test;

// appendRand();

// function appendRand(): void
// {
    
//     if (isset($_SESSION['data'])) {
//         $data = $_SESSION['data'];
//     } else {
//         $data = "";
//     }

//     $data .= rand(0, 9);
//     $_SESSION['data'] = $data;

//     print_r($_SESSION);
// }
