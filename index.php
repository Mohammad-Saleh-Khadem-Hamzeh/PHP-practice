<?php

$s = 7;

function d(){
    static $s = 3;

    $s++;
    echo $s;
}

d();
d();
d();