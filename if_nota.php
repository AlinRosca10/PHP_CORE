<?php
    //$nota=$_GET['nota'];

    $nota=rand(1,10);
    if($nota== 1 || $nota== 2 ||$nota== 3 ||$nota==4){
        echo 'Nota '. $nota .' este insuficient!';
    }
    elseif($nota== 5|| $nota== 6){
        echo 'Nota '. $nota .' este suficient!';
    }
    elseif($nota== 7|| $nota== 8){
        echo 'Nota '. $nota .' este bun!';
    }
    elseif($nota== 9|| $nota== 10){
        echo 'Nota '. $nota .' este foarte bun(bursier)!';
    }
?>