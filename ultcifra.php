<?php
    // $x=$_GET["x"];
    $x=rand(0,98799878);
    echo 'Pentru numarul ' .$x .' cea mai mare cifra este ';
    
    $maxC=0;
    while($x>0){
        $c=$x%10;
        if($maxC<$c)
        {
            $maxC=$c;
        }
        $x=$x/10;    
    }
    echo $maxC .'!';
?>