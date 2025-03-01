<?php
    $x=rand(1,10);

    switch ($x%2) {
        case 0:
            echo 'Numarul ' .$x .' este par!';
            break;
        case 1:
            echo 'Numarul '.$x .' este impar';
            break;
        default:
        echo 'This is an error int for '.$x .'!';
        break;
    }
?>