<?php

$input = readline();
$input = (int)$input;

function _5000 (){
    $a = null;
    for($i = 1 ; $i <= 5000 ; $i++){
        $a = $a . $i;
    }
    $a = (string)$a;
    return $a;
}
$a = _5000();
function serch($s){
    global $a;
    $output = $a[$s - 1];
    return $output; 
}
$result = serch($input);
echo $result;