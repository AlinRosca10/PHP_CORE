<?php
    function myfunction() {
        $no1 = 30; // local variable
    }
    $no1 = 40;//global variable
    myfunction();
    echo $no1;


?>