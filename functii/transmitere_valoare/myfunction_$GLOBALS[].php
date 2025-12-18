<?php 
    function myfunction() {
        $GLOBALS["no1"] = 40;//local 
    }
    $no1 = 30;//global
    myfunction();
    echo $no1;//10
?>