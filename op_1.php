<?php
    var_dump(1323=='1323abc');//false
    echo "<br>";
    var_dump(1323==='1323abc');//false
    echo "<br>";
    var_dump(1323=='1323');//true
    echo "<br>";
    var_dump(1323==='1323');//true
    echo "<br>";
    var_dump(1323==1323);//true
    echo "<br>";
    var_dump(1323===1323);//true
    echo "<br>";
    var_dump(1323==1323.0);//true
    echo "<br>";
    var_dump(1323===1323.0);//false
    echo "<br>";
    var_dump(1323==1323.1);//false
    echo "<br>";
    var_dump(1323===1323.1);//false
    echo "<br>";

?>