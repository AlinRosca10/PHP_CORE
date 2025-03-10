<?php
    //$x=$_GET["x"];
    $x=rand(-11,11);
    $f=1;
    if($x>0){
        for ($i= 1; $i<=$x; $i++) {
            $f=$f*$i;
        }
    }elseif($x==0){
        $f=0;
    }else{
        for ($i= $x; $i<0; $i++) {
            $f=$f*$i;
        }
    }
    echo 'Pentru numarul ' . $x .' factorial este ' .$f;
    echo "<br>";

    $i=1;
    if($x>0){
        while($i<=$x){
            $f=$f*$i;
            $i++;
        }
    }elseif($x==0){
        $f=0;
    }else{
        $i=-1;
        while($i>=$x){
            $f=$f*$i;
            $i--;
        }
    }
    echo 'Pentru numarul ' . $x .' factorial este ' .$f;
    echo "<br>";

    $i=1;
    if($x>0){
        do{
            $f=$f*$i;
            $i++;
        }while($i<=$x);
    }elseif($x==0){
        $f=0;
    }else{
        $i=-1;
        do{
            $f=$f*$i;
            $i--;
        }while($i>=$x);
    }
    echo 'Pentru numarul ' . $x .' factorial este ' .$f;
    echo "<br>";
?>