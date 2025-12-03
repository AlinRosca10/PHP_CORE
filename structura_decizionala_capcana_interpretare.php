<?php 
    $x = 10;
    if ($x = 5) {
        echo 'Valoarea este 5'; // Atribuie valoarea 5 lui $x și afișează 'Valoarea este 5'
    } elseif ($x == 10) {
        echo 'Valoarea este 10'; // Afișează 'Valoarea este 10' dacă $x este egal cu 10
    } else {
        echo 'Altă valoare'; // Afișează 'Altă valoare' dacă niciuna dintre condițiile anterioare nu este adevărată
    }

    echo "<br>";

    $x = 10;
    if ($x == 25) {
        echo "Valoarea lui $x este 25"; // Afișează 'Valoarea este 25' dacă $x este egal cu 5
    }

    echo "<hr>";

    $x = 10;
    if ($x == 25) echo "Valoarea lui $x este 25"; // Nu afișează nimic deoarece condiția este falsă

    echo "<hr>";

    $x = 10;
    if ($x == 25); echo "Valoarea lui $x este 25"; // Afișează întotdeauna 'Valoarea este 25' din cauza punctului și virgulei după condiție
?>