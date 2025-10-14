<?php
    //localhost/EXERCITII_PHP/PHP/curs_1/calculator2numere.php?x=3&y=10
    var_dump($_GET);
    echo "<br>";
    $x = $_GET['x'];
    $y = $_GET['y'];

    $rez = $x + $y;
    echo "Rezultatul este $rez";//interpolare de stringuri
    echo "<br>";
    echo 'Rezultatul este '.$rez;//contatenare -> performanta mai buna cu concatenarea decat cu interpolarea
    echo "<br>";
?>