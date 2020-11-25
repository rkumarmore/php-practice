<h3>Fibonacci series using While loop:</h3>

 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
<?php 
/*Using whikle loop*/

$a = array(0,1,2,3,4,5,6,7,8,9,10);
echo '<br>';
foreach ($a as $key => $n) {
	$n1 = 0;
	$n2 = 1;
	$nth = 0;
	$count=0;
	
	if($n==0 || $n == 1){
		$nth = $n;
	}else{
        while ($count < $n-1){
            $nth = $n1 + $n2;
            $n1 = $n2;
            $n2 = $nth;
            $count += 1;
        }
    }
	echo $nth.'<br>';
}

