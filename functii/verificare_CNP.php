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
                $rezultat_sex = verificare_sex($array_cnp);

                if (!isset($rezultat_sex)) {
                    return;
                }

                // verificare an nastere AA
                require_once 'functii_auxiliare_CNP/verificare_an.php';
                $rezultat_verificare_an = verificare_an($array_cnp);
                // daca luna este februarie, preluare zile maxim luna din rezultatul functiei verificare_an
                $zile_maxim_luna = $rezultat_verificare_an['zile_maxim_luna'] ?? null;

                if (!isset($rezultat_verificare_an)) {
                    return;
                }

                //verificare luna de nastere LL
                require_once 'functii_auxiliare_CNP/verificare_luna.php';
                $rezultat_verificare_luna = verificare_luna($array_cnp, $zile_maxim_luna);
                // preluare zile maxim luna din rezultatul functiei verificare_luna
                $zile_maxim_luna = $rezultat_verificare_luna['zile_maxim_luna'];

                if (!isset($rezultat_verificare_luna) || $rezultat_verificare_luna['luna_nastere_string'] === null) {
                    return;
                }

                // verificare ziua de nastere ZZ
                require_once 'functii_auxiliare_CNP/verificare_zi.php';
                $rezultat_verificare_zi = verificare_zi($array_cnp, $zile_maxim_luna);

                if (!isset($rezultat_verificare_zi) || $rezultat_verificare_zi['ziua_nastere'] === null) {
                    return;
                }

                // verificare judet JJ
                require_once 'functii_auxiliare_CNP/verificare_judet.php';
                $rezultat_verificare_judet = verificare_judet($array_cnp);

                if (!isset($rezultat_verificare_judet['judet_nastere'], $rezultat_verificare_judet['nume_judet']) || $rezultat_verificare_judet['nume_judet'] === null || $rezultat_verificare_judet['judet_nastere'] === null) {
                    return;
                }

                // verificare numar secvential de atribuire NNN
                require_once 'functii_auxiliare_CNP/verificare_numar_secvential_atribuire.php';
                $rezultat_verificare_numar_secvential_atribuire = verificare_numar_secvential_atribuire($array_cnp, $rezultat_sex['sex'], $rezultat_verificare_zi['ziua_nastere'], $rezultat_verificare_luna['luna_nastere'], $rezultat_verificare_an['an_nastere'], $rezultat_verificare_judet['nume_judet']);

                if (!isset($rezultat_verificare_numar_secvential_atribuire) || $rezultat_verificare_numar_secvential_atribuire['numar_nastere'] === null) {
                    return;
                }
                // verificare cifra de control
                require_once 'functii_auxiliare_CNP/verificare_cifra_control.php';
                $rezultat_verificare_cifra_control = verificare_cifra_control($array_cnp); 
                if (!isset($rezultat_verificare_cifra_control)) {
                    return;
                }

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

    verificare_CNP ('5001231020028');
?>