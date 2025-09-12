<?php
    $array5=array(
        'cursuri'=>array('php','html','java'),
        'sali'=>array('sala1','sala2','sala3')
    );
    echo $array5['cursuri'][1]. ' '.$array5['sali'][2];
    echo "<br>";
    $a[]='a';
    $a[]='b';
    $a[]='c';
    print_r($a);
    echo "<br>";
    $a1=7;
    $a1++;
    echo $a1;
    $a2='Exercitii PHP';
    $b=$a2[3];
    echo "<br>";
    echo $b;
    echo "<br>";
    $x=5;
    $y=10;
    $z="$x + $y";
    echo $z;
    echo "<br>";
    $phpvar1="a";
    $$phpvar1="b";
    echo "$phpvar1 $a";
?>
