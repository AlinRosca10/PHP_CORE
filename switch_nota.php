<?php
    // $nota=$_GET["nota"];
    $nota=rand(1,10);
    switch ($nota) {
        case 1:
        case 2: 
        case 3:
        case 4 :
            echo "Nota $nota este insuficient!";
            break;
        case 5:
        case 6:
            echo "Nota $nota este suficient!";
            break;
        case 7:
        case 8:
            echo "Nota $nota este bun!";
            break;
        case 9:
        case 10:
            echo "Nota $nota este foarte bun (bursier)!";
            break;
        default:
            echo "This is a error message!";
            break;
    }

    // //cod neoptimizat
    // switch ($nota) {
    //     case 1 || 2 || 3 || 4:
    //         echo "Nota $nota este insuficient!";
    //         break;
    //     case 5 || 6:
    //         echo "Nota $nota este suficient!";
    //         break;
    //     case 7 || 8:
    //         echo "Nota $nota este bun!";
    //         break;
    //     case 9 || 10:
    //         echo "Nota $nota este foarte bun (bursier)!";
    //         break;
    //     default:
    //         echo "This is a error message!";
    //         break;
    // }
?>