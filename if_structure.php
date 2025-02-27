<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    //$a=32;
    //$b=12;
    if ($a > $b) {
        echo "$a is greater than $b";
    } else {
        echo "$a is not greater than $b";
    }
?>