<?php
    for($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            continue; // Sare peste numerele pare
        }
        echo $i . " "; // Afișează doar numerele impare
    }
    echo "<br>";
    echo "<hr>";
    for($i = 0; $i < 10; $i++) {
        if ($i > 5) {
            continue; // Sare peste iterațiile când $i este mai mare decât 5
        } else {
            $i--; // Decrementează $i dacă nu este mai mare decât 5
        }
        echo $i . " "; // Afișează valorile lui $i
    }
?>