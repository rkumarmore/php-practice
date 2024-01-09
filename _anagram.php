<?php

$box = ['...X..', '....XX', '..X...'];
$box  = ['....X..', 'X......', '.....X.', '.......'];
// $box = ['...X.', '.X..X', 'X...X', '..X..'];
// echo 'Yes';
// print_r(count(explode('.', explode('X', $x)[0])));


function gridWalk($grid, $row, $column)
{
}
$R = $box;
foreach ($R as $key => $r) {
    $grid[] = str_split($r);
}
$previous_row = 0;
$cuurent_row = 1;

$count = $position = array_search('X', $grid[0]);
// echo '<pre>'; print_r($count); exit();
for ($i = 1; $i < count($grid); $i++) {
    if ($grid[$i][$position] != 'X') {
        $count++;
    } else {
        for ($j = 0; $i < $columns; $j++) {
        }
    }
    // $columns = count($grid[$i]);
    // for($j=0; $i<$columns; $j++){
    //     if()
    // }
}

echo $count;
// for($i=$r1; $i>=0; $i--){
//     // echo '<pre>'; print_r($grid[1][$i]); exit();
//    if($grid[1][$i] == 'X') {
//     // echo '2nd row '.$grid[1][$i];
//     // exit();
//    }else{
//     $r2++;
//    }
   
// }

// echo $r2;



// echo '<pre>'; print_r($grid); exit();
// echo '<pre>'; print_r($grid); exit();

/*
(
    [0] => Array
        (
            [0] => .
            [1] => .
            [2] => .
            [3] => X
            [4] => .
            [5] => .
        )

    [1] => Array
        (
            [0] => .
            [1] => .
            [2] => .
            [3] => .
            [4] => X
            [5] => X
        )

    [2] => Array
        (
            [0] => .
            [1] => .
            [2] => X
            [3] => .
            [4] => .
            [5] => .
        )

) 
****/
