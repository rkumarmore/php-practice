<?php  
// Print fibonacci series : 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...

/*Using whikle loop*/
$limit = 10;
$n1 = 0;
$n2 = 1;
$output = $n1.','.$n2.',';
while ($limit){
    $n3 = $n1+$n2;
    $n1 = $n2;
    $n2=$n3;
    $output.=$n3;

    if ($limit !== 1) {
         $output.=',';
    }
    $limit--;
}
echo "<h3>Fibonacci series using While loop:</h3>";
echo $output;

/*Using recursive function*/
$limit = 10;
$n1=0;
$n2=1;
$output = $n1.','.$n2.',';
$output .= myseries($n1,$n2,$limit);
echo "<h3>Fibonacci series using my recursive function:</h3>"; 
print_r($output);

function myseries($n1,$n2, $limit)
{
    $n3 = $n1+$n2;
    $n1=$n2;
    $n2=$n3;
    if ($limit == 1) {
        return $n3;
    }    
    return $n3.','.myseries($n1, $n2, $limit-1);
}

?>  

<?php  
/* Print fiboancci series upto 12 elements. */  
$num = 12;  
echo "<h3>Fibonacci series using recursive function:</h3>";  
echo "\n";  
/* Recursive function for fibonacci series. */  
function series($num){  
    if($num == 0 || $num == 1){  
    	return $num;  
    }else {  
		return (series($num-1) + series($num-2));  
	}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
	echo series($i);  
	echo "\n";  
} 