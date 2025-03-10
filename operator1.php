<?php
    //$x=$_GET["x"];
    $x=mt_rand(0,10000);
    echo ($x%2==0?"This number $x is even!!!": "This number $x is odd!!!");
    echo "<br>";

    //echo $user==false??'vizitator';//returneaza null si opreste executia
    echo "<br>";
    echo $user??'vizitator';//afiseaza vizitator
    echo "<br>";
    echo ($x%2===0?"This number $x is even and have the same type!!!": "This number $x is odd or not the same type!!!");
    echo "<br>";

?>