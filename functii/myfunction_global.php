<?php
    function myfunction() {
        global $no1; // global variable
        $no1 = 30;
    }
    $no1 = 40;//global variable
    myfunction();
    echo $no1;


?>