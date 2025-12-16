<?php
    require_once('functii/functie_suma3numere.php');

    //vefificarea simultana pentru valorile setate
    if (isset($_GET['a'], $_GET['b'], $_GET['c'], $_GET['x'], $_GET['y'], $_GET['z'])) {

        //citirea primului set de date si conversia acestuia la int
        $a = (int) $_GET['a'];
        $b = (int) $_GET['b'];
        $c = (int) $_GET['c'];

        //citirea celui de al doilea set de date si conversia acestuia la int
        $x = (int) $_GET['x'];
        $y = (int) $_GET['y'];
        $z = (int) $_GET['z'];

        //afisarea rezultatelor adunarii numerelor simultan pe mai multe linii
        echo "a + b = " . ($a + $b) .
                "<br> c + x = " . ($c + $x) .
                "<br> y + z = " . ($y + $z);
        echo "<br>";
        suma3numere($a, $b, $c);
        echo "<br>";        
        suma3numere($x, $y, $z);
    } else {
        echo 'Te rog frumos sa introduci date valide in adresa URL exemplu a=1&b=2&c=3&x=4&y=5&z=6.';
    }
?>