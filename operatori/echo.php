<?php
    $b = 1;
    echo 'Afisare valoare b cu echo ';
    echo $b;
    echo '<br>';
    print($b);
    echo '<br>';
    echo($b);
    echo '<br>';
    print $b;// nu este recomandat in PHP7 respectiv afisarea se poate face si fara paranteze cu print
    echo '<br>';
    print$b; // nu este recomandat
    $a = 2;
    //print $a, $b; // nu este recomandat
    echo '<br>';
    echo $b, $a; // se poate face cu echo
    echo '<br>';
    echo (print($b)); 
    echo '<br>';
    echo (print ($a));// se poate face cu echo
    echo '<br>';
    $c = print($a);// se poate face cu print
    echo '<br>';
    echo $c;
    echo '<br>';
    echo 15 + 16; // se face adunarea
    echo '<br>';
    echo 15 + print 16; // se face intai print 16 si apoi se aduna 15 + 1
    echo '<br>';
    echo 15 + print 20; // se face intai print 20 si apoi se aduna 15 + 1
    echo '<br>';
    //print 10 + echo 10; // eroare fata de linia anterioara
?>