<?php
    //$x=158;
    $x=rand(1,30);
    switch($x)
    {
        case $x%2==0;
            echo 'Numarul '.$x.' este par!';
            break;
        case $x%2==1;
            echo 'Numarul '.$x.' este impar!';
            break;
        }