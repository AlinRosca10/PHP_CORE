<?php
    //$x=$_GET['x'];
    $x=rand(-1000,1000);

    if($x%2==0 && $x>0)
    {
        echo 'Numarul '. $x .' este par si pozitiv!';
    }
    else if($x%2!=0 && $x>0)
    {
        echo 'Numarul '. $x .' este impar, dar este pozitiv!';
    }
    else if($x==0)
    {
        echo 'Numarul '. $x .' este par si este nul!';
    }
    else if($x%2==1 && $x<0)
    {
        echo 'Numarul '. $x .' este impar si negativ';
    }
    else
    {
        echo 'Numarul '. $x .' este par si negativ!';
    }
?>