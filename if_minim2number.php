<?php
    // $x=$_GET['x'];
    // $y=$_GET['y'];

    $x=rand(1,2000);
    $y=rand(1,2000);

    if($x<$y)
    {
        echo 'The minimum between '. $x .' and '. $y. ' is '. $x. ' !';
    }
    else if($x>$y)
    {
        echo 'The minimum between '. $x .' and '. $y. ' is '. $y. ' !';
    }
    else
    {
        echo "It's not exists a minimum between that numbers equals $x!";
    }
?>