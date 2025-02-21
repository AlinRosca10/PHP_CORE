<?php
    $x=$_GET['x'];//citire
    $y=$_GET['y'];//citire
    if($x>$y)
    {
        echo $x;
    }elseif($x===$y)
    {
        echo "Numerele sunt egale, au acelasi tip, iar valoarea lor este $x";
    }elseif($x==$y)
    {
        echo "Numerele sunt egale, iar valoarea lor este $x";
    }
    else
    {
        echo $y;
    }

?>