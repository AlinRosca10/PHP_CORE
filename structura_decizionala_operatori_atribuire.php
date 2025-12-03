<?php 
    $i = 25;
    if ($i == 1) {
        echo 'Hello'; // Afișează 'Hello' dacă $i este egal cu 1
    } elseif ($i = 2) {
        echo 'Hello World'; // Atribuie valoarea 2 lui $i și afișează 'Hello World'
    } elseif ($i == 25) {
        echo 'Hello World and Goodbye!'; // Afișează 'Hello World and Goodbye!' dacă $i este egal cu 25
    } else "Error"; // Afișează 'Error' dacă niciuna dintre condițiile anterioare nu este adevărată

?>