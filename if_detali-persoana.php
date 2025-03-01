<?php
    $v=$_GET["v"];
    $i=$_GET["i"];
    $s=$_GET["s"];

    if($s=="m")
    {
        $g=50+0.75*($i-150)+($v-20)/4;
        echo 'Greutatea optima este '. $g .' kg !';
    }
    else if($s== 'f')
    {
        $g=50+0.75*($i-150)+($v-20)/4;
        $g=0.9* $g;
        echo 'Greutatea optima este '. $g .'kg !';
    }
?>