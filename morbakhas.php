<?php

$f = readline();
$s = readline();

function tashkhis($f , $s){
    if($f == $s)
        return 0;
    elseif($f + $s == 5)
        return 2;
    else{
        return 1;
    }
}

$result = tashkhis($f , $s);

echo $result;