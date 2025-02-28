<?php
    // $x=$_GET['x'];
    // $y=$_GET['y'];

    $x=rand(1,1212);
    $y=rand(1,1000);

    if($x>$y)
    {
        echo $x. ' is greater than '. $y;
    }
    else if($x==$y)
    {
        echo $x. ' is equal with '. $y;
    }
    else
    {
        echo $y. ' is greater than '. $x;
    }
?>