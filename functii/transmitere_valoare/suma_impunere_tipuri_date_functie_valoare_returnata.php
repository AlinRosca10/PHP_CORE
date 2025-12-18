<?php
    declare (strict_types=1);
    function suma(int $x, int $y) : int {
        return $x + $y;
    }
    echo suma(5,8);

    echo "<br>";

    $x = 20;
    $y = 'a';
    if (is_int($x) && is_int($y)) { //validare
        echo Suma($x, $y);
    } else {
        echo 'Va rog frumos sa introduceti date numerice intregi (de tipul int) valide';
    }
    //Suma('aaa', 10);//fatal error
?>