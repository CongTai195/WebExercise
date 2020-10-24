<?php
function max1 ($a, $b, $c){
    $max = $a;
    if ($max < $b) $max = $b;
    if ($max < $c) $max = $c;
    echo $max;
}
    $a = 1;
    $b = 3;
    $c = 6;
    max1($a, $b, $c);
    if ($a == 1) {
        echo "Today i'm good and you";
    }
?>