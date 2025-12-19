<?php
    function verificare_CNP (string $CNP) {
        if (ctype_digit($CNP) && strlen($CNP) === 13) {

            $array_cnp = array_map('intval', str_split($CNP));

            for ($i = 0; $i < 13; $i++) {
                if ($array_cnp[$i] >= 0 && $array_cnp[$i] <= 9) {
                    $validare_cifra_cnp = true;
                } else {
                    $validare_cifra_cnp = false;
                    echo "Cifra $array_cnp[$i] de la pozitia $i (identarea incepe de la 0) nu este o cifra intreaga";
                    break;
                }
            }

            if (count($array_cnp) === 13 && $validare_cifra_cnp === true && 
                                                        isset($array_cnp[0], $array_cnp[1], $array_cnp[2], $array_cnp[3],
                                                            $array_cnp[4], $array_cnp[5], $array_cnp[6], $array_cnp[7],
                                                                $array_cnp[8], $array_cnp[9], $array_cnp[10], $array_cnp[11], $array_cnp[12])) {

                // verificare sex S
                require_once 'functii_auxiliare_CNP/verificare_sex.php';

                // verificare an nastere AA
                require_once 'functii_auxiliare_CNP/verificare_an.php';

                //verificare luna de nastere LL
                require_once 'functii_auxiliare_CNP/verificare_luna.php';

                // verificare ziua de nastere ZZ
                require_once 'functii_auxiliare_CNP/verificare_zi.php';

                // verificare judet JJ
                require_once 'functii_auxiliare_CNP/verificare_judet.php';

                // verificare numar secvential de atribuire NNN
                require_once 'functii_auxiliare_CNP/verificare_numar_secvential_atribuire.php';

                // verificare cifra de control
                require_once 'functii_auxiliare_CNP/verificare_cifra_control.php';

                } else {
                echo "In codul numeric personal <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)' target='_blank'>(C.N.P.)</a> nu sunt 13 cifre, va rugam sa introduceti un <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)' target='_blank'>C.N.P. valid</a> format din 13 cifre.";
            }
            
        } else {
            echo "Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#S' target='_blank'> S </a> 
                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#AA' target='_blank'> AA </a>
                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#LL' target='_blank'> LL </a>
                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#ZZ' target='_blank'> ZZ </a>
                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#JJ' target='_blank'> JJ </a>
                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#NNN' target='_blank'> NNN </a>
                    <a href=\"#\" onclick=\"window.open('https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#C');
                                            window.open('https://ro.wikipedia.org/wiki/Sum%C4%83_de_control');return false;\" target='_blank'> C </a>";
        }
    }

    verificare_CNP ('2010107250019');
?>