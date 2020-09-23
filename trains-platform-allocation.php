<?php 
$train = $halt =$arr = $dep = array();

$arr = ['9:00', '9:40', '9:50', '11:00', '15:00', '18:00'];
$dep = ['9:10', '21:00', '17:45','16:30', '16:45', '20:00'];

$i=1;
$no_platforms =0;

foreach ($arr as $key => $value) {

	$curr_dep_time = date('H:i', strtotime($dep[$key]));
	$curr_arr_time = date('H:i', strtotime($value));
	
	if ($key == 0) {
		$train[$i][$value] = $halt[$i] = $curr_dep_time;
		continue;
	}
 
	asort($halt);

	foreach ($halt as $hkey => $hvalue) {
		if ($curr_arr_time > $hvalue) {
			$train[$hkey][$value] = $halt[$hkey] = $curr_dep_time;
			continue 2;
		}
	}
	$i++;
	$train[$i][$value] = $halt[$i] = $curr_dep_time;
}

ksort($halt);

echo '<pre>Total Platforms required '; print_r($i); 
echo '<pre>Platforms and respective departure times'; print_r($halt); 
echo '<pre>Platform wise schedule '; print_r($train); 
