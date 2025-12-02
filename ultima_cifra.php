<?php
    $number = $_GET['number'];
    // Suma cifrelor unui numar
    //Verificam daca numarul chiar este un numar
    if (!is_numeric($number)) {
        echo "Eroare: '$number' nu este un numar valid.";
        exit;
    }
    // Verificam daca numarul este intreg
    if (strpos($number, '.') !== false || strpos($number, ',') !== false) {
        echo "Eroare: '$number' nu este un numar intreg.";
        exit;
    }
    // Verificam daca numarul este zero
    if ($number == 0) {
        echo "Suma cifrelor numarului 0 este: 0";
        exit;
    }

    // Verificam daca numarul este negativ
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