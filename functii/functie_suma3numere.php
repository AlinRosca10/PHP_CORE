<?php
    function suma3numere($x = 0, $y = 0, $z = 0) { // daca functia nu primeste parametrii sau primeste mai putin de 3 parametrii logica de executie nu este afectata, interoperabilitatea creste
        echo "Suma celor 3 numere $x, $y si $z este " . ($x + $y + $z) . "<br>";
    }

    suma3numere(12, 2132, 32, 23); // nu foloseste al patrulea parametru

    function suma4numere(... $z) {
        var_export($z);
        $sum = 0;
        foreach ($z as $number) {
            $sum += $number;
        }

        echo "<br>Suma este " . $sum . "<br>";
    }
    suma4numere(12, 321, 21, 112, 2321, 12);
?>