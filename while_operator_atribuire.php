<?php
    $array = [1, 2, 3, 4, 5];
    while ($value = array_shift($array)) { // atribuirea cu operator de atribuire
        echo $value . "<br>"; // afișare
    }
    echo "<hr>";

    $x = 7;
    while ($x < 30) {
        $x .= 2; // atribuirea cu operator de concatenare
        echo $x . "<br>"; // concatenare
    }

    echo "<hr>";

    while ($x < 100) {
        $x += 5; // atribuirea cu operator de adunare
        echo $x . "<br>"; // afișare
    }
?>
