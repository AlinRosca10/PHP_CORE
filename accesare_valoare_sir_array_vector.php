<?php
    $a = 10;
    $b = 5;
    $c = $a + $b;
    echo "Suma lui $a si $b este egala cu $c.";

    echo "<hr>";
    $fructe = array("mar", "banana", "cireasa");
    echo "Primul fruct din lista este: " . $fructe[0];

    echo "<hr>";

    $a = array('a', 3 => 'b', 1 => 'c', 'd');
    echo $a[4]; // va afisa 'd'
    echo "<hr>";
    for ($i = 0; $i < count($a); $i++) {
        echo "Elementul $i este: " . $a[$i] . "<br>";
    }
?>