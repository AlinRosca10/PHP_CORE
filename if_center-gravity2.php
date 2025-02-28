<?php
    // $a=$_GET['a'];
    // $b=$_GET['b'];
    // $c=$_GET['c'];

    $a = rand(0, 2);
    $b = rand(0, 2);
    $c = rand(0, 2);

    // Check if any two weights sum up to the third
    $perfectBalance = ($a == $b + $c || $b == $a + $c || $c == $a + $b);

    // Construct the output message
    $message = sprintf(
        "These children are %sin perfect center of gravity! The weights are: a = %d kg, b = %d kg, c = %d kg.",
        $perfectBalance ? "" : "not ",
        $a, $b, $c
    );

    // Display the message
    echo $message;

    echo "<br>";
    var_dump(123 == "123abc"); // PHP 8 will return bool(false)
?>