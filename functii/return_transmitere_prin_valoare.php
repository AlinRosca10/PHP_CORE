<?php
    function modifica($a = 3) {
        $a += 15;
        return $a;
    }
    $a = 0;
    echo modifica($a);
    echo "<br>";
    echo $a;
?>