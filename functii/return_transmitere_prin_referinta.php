<?php
    function &modifica($a = 3) {
        $a += 15;
        return $a;
    }
    $a = 0;
    $b = &modifica($a);
    echo $b;
    echo "<br>";