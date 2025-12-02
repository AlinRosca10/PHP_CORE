<?php
    $number = $_GET['number'];
    echo "Suma cifrelor numarului $number este: ";
    $sum_number = 0;
    if ($number < 0) {
        $number = -$number;
    }
    while ($number > 0) {
        $digit = $number % 10;
        $sum_number += $digit;
        $number = intdiv($number, 10);
    }
    echo $sum_number;
?>