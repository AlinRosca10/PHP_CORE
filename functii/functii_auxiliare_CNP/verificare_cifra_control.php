<?php
    // verificare cifra de control
    $control_cnp = [2, 7, 9, 1, 4, 6, 3, 5, 8, 2, 7, 9];

    $cifra_control = $array_cnp[12];
    $suma_cifra_control = 0;
    for ($i = 0; $i < 12; $i++) {
        $suma_cifra_control += $array_cnp[$i] * $control_cnp[$i];
    }
    if ($suma_cifra_control % 11 === 10) {
        $cifra_control2 = 1;
    } else {
        $cifra_control2 = $suma_cifra_control % 11;
    }
    if ($cifra_control === $cifra_control2) {
        echo "Cifra de control este  $cifra_control2.";
    } else {
        echo "Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                        <a href=\"#\" onclick=\"window.open('https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#C');
                                                window.open('https://ro.wikipedia.org/wiki/Sum%C4%83_de_control');return false;\" target='_blank'> C </a>";
    }
?>