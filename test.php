<?php 

// Print fibonacci series : 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
$limit = 10;
$n1 = 0;
$n2 = 1;
 $output = $n1.','.$n2.',';
while ($limit) {
	$n3 = $n1+$n2;
	$n1 = $n2;
	$n2=$n3;
    $output.=$n3;

    if ($limit !== 1) {
    	 $output.=',';
    }
    $limit--;
}
echo $output; 
