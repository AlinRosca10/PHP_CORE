<?php
    //$x=$_GET['x'];
    $x=rand(0,1098876543);
    $y=$x;
    $maxC=0;
    do{
        if($y%10>$maxC){
            $maxC=$y%10;
        }
        $y=$y/10;
    }while($y>0);// Atentie nu este in contradictie cu while
    echo 'Cifra maxima a numarului '. $x .' este '. $maxC .'!';
    echo "<br>";
    echo 'Alin  esti cel mai mare programator din toate timpurile!!!';
?>