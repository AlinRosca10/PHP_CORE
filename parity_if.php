<?php
    //$number = 10;
    //echo "Numarul este: $number <br>";
    //$number=$_GET['number'];

    $number= rand(1,1000);
    echo "Numarul este: $number <br>";

    if ($number % 2 == 0) {
        echo "Numarul este par";
    } else {
        echo "Numarul este impar";
    }
?>