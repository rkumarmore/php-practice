<?php
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$str = '({}[(){}{[()]}{}])';
/*$rstr = strrev($str);

$l = strlen($str);
if(is_float($l/2)){
    die('False');
}    

for($i = 0; $i< $l; $i++){
	$open;
    if(substr($str,$i,1 ) )
        $open;
}
echo 'True';*/

/*while (($closing = strpos($str, "}")) !== false) {
    //find the opening brace 
    $opening = strrpos(substr($str, 0, $closing), '{');
    //calculate level (how many opening braces are in front of the current one)
    $level = substr_count(substr($str, 0, $opening), '{') + 1;
    //replace braces by tags
    $str = substr_replace($str, '[/level' . $level . ']', $closing, 1);
    $str = substr_replace($str, '[level' . $level . ']', $opening, 1);
}

var_dump($str);*/

?>