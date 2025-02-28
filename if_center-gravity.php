<?php
    // $a=$_GET['a'];
    // $b=$_GET['b'];
    // $c=$_GET['c'];

    $a=rand(0,4213);
    $b=rand(0,4213);
    $c=rand(0,4342);

    echo "Weights: a = $a kg, b = $b kg, c = $c kg<br>";

    if ($a == $b + $c || $b == $a + $c || $c == $a + $b) {
        echo "These children are in perfect center of gravity!<br>";
    } else {
        echo "These children are NOT in perfect center of gravity!<br>";

        // Identify the child with surplus weight
        if ($a > $b + $c) {
            echo "Child A is in surplus with " . ($a - ($b + $c)) . " kg.<br>";
        } elseif ($b > $a + $c) {
            echo "Child B is in surplus with " . ($b - ($a + $c)) . " kg.<br>";
        } elseif ($c > $a + $b) {
            echo "Child C is in surplus with " . ($c - ($a + $b)) . " kg.<br>";
        } else {
            // Identify the child with subplus

            if ($a+$b < $b+$c) {
                echo "Child C is in subplus with " . ($a+$b - $c) . " kg.<br>";
            } elseif ($b+$c < $a+$c) {
                echo "Child A is in subplus with " . ($b+$c - $a) . " kg.<br>";
            } elseif ($a+$c < $a+$b) {
                echo "Child B is in subplus with " . ($a+$c - $b) . " kg.<br>";
            } elseif ($a+$b==$b+$c) {
                echo "Child C is in subplus with " . ($a+$b - $c) . " kg and child A and child C.<br>";
            } elseif ($b+$c==$a+$c) {
                echo "Child A is in subplus with " . ($B+$c - $a) . " kg and child A and child B.<br>";
            } elseif ($a+$b==$a+$c) {
                echo "Child B is in subplus with " . ($a+$c - $b) . " kg and child B and child C.<br>";
            } else {
                echo "This is a general error!<br>";
            }
        }
    }

    echo "<br>";
    var_dump(123 == "123abc"); // PHP 8 will return bool(false)
?>