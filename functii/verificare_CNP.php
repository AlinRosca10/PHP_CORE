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
                $sex = ($array_cnp[0] % 2 === 0) ? 'Feminin' : 'Masculin';
                echo "Sexul este $sex. <br>";

                // verificare an nastere AA
                switch ($array_cnp[0]) {
                    case 1:
                    case 2:
                        $an_nastere = 19 * 100 + $array_cnp[1] * 10 + $array_cnp[2];
                        break;
                    case 3:
                    case 4:
                        $an_nastere = 18 * 100 + $array_cnp[1] * 10 + $array_cnp[2];
                        break;
                    case 5:
                    case 6:
                        $an_nastere = 20 * 100 + $array_cnp[1] * 10 + $array_cnp[2];
                        break;
                    case 7:
                    case 8:
                        $an_nastere = $array_cnp[1] * 10 + $array_cnp[2];
                        if ($an_nastere <= 25) {
                            $an_nastere = 20 * 100 + $an_nastere;
                        } else {
                            $an_nastere = 19 * 100 + $an_nastere;
                        }
                        $rezidenta_straina = true;
                        echo "<p style='color: green;'>Persoana are rezidenta straina pe teritoriul Romaniei.</p> <br>";
                        break;
                    default:
                        $an_nastere = $array_cnp[1] * 10 + $array_cnp[2];
                        if ($an_nastere <= 25) {
                            $an_nastere = 20 * 100 + $an_nastere;
                        } else {
                            $an_nastere = 19 * 100 + $an_nastere;
                        }
                        $rezidenta_straina = false;
                        $strain = true;
                        echo "<p style='color: red;'>Persoana este straina si nu are rezidenta straina pe teritoriul Romaniei.</p> <br>";
                        break;
                }
                if (($an_nastere % 400 === 0) || ($an_nastere % 4 === 0 && $an_nastere % 100 !== 0)) {
                    $an_bisect = true;
                    $zile_maxim_luna = 29;
                } else {
                    $zile_maxim_luna = 28;
                    $an_bisect = false;
                }
                echo "Anul de nastere este $an_nastere, care " . (($an_bisect === true) ? 'este ' : 'nu este ') . 'bisect. '; 

                //verificare luna de nastere LL
                $luna_nastere = $array_cnp[3] * 10 + $array_cnp[4];
                switch ($luna_nastere) {
                    case 1:
                        $luna_nastere_string = 'ianuarie';
                        $zile_maxim_luna = 31;
                        break;
                    case 2:
                        $luna_nastere_string = 'februarie';
                        break;
                    case 3:
                        $luna_nastere_string = 'martie';
                        $zile_maxim_luna = 31;
                        break;
                    case 4:
                        $luna_nastere_string = 'aprilie';
                        $zile_maxim_luna = 30;
                        break;
                    case 5:
                        $luna_nastere_string = 'mai';
                        $zile_maxim_luna = 31;
                        break;
                    case 6:
                        $luna_nastere_string = 'iunie';
                        $zile_maxim_luna = 30;
                        break;
                    case 7:
                        $luna_nastere_string = 'iulie';
                        $zile_maxim_luna = 31;
                        break;
                    case 8:
                        $luna_nastere_string = 'august';
                        $zile_maxim_luna = 31;
                        break;
                    case 9:
                        $luna_nastere_string = 'septembrie';
                        $zile_maxim_luna = 30;
                        break;
                    case 10:
                        $luna_nastere_string = 'octombrie';
                        $zile_maxim_luna = 31;
                        break;
                    case 11:
                        $luna_nastere_string = 'noiembrie';
                        $zile_maxim_luna = 30;
                        break;
                    case 12:
                        $luna_nastere_string = 'decembrie';
                        $zile_maxim_luna = 31;
                        break;
                    default :
                        echo "Luna de nastere este invalida. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                                <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#LL' target='_blank'> LL </a>";
                        break;
                }
                echo "<br>Luna de nastere este $luna_nastere_string si a avut un numar maxim de $zile_maxim_luna zile. <br>";

                // verificare ziua de nastere ZZ
                $ziua_nastere = $array_cnp[5] * 10 + $array_cnp[6];
                if (($ziua_nastere <= 0) || ($ziua_nastere > $zile_maxim_luna)) {
                    echo "Ziua de nastere este invalida. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                            <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#ZZ' target='_blank'> ZZ </a>";
                }
                echo "Ziua de nastere este $ziua_nastere. <br>";

                // verificare judet JJ
                $judet_nastere = $array_cnp[7] * 10 + $array_cnp[8];
                switch ($judet_nastere) {
                    case 1: 
                        $nume_judet = 'Alba'; 
                        break;
                    case 2: 
                        $nume_judet = 'Arad'; 
                        break;
                    case 3: 
                        $nume_judet = 'Argeș'; 
                        break;
                    case 4: 
                        $nume_judet = 'Bacău'; 
                        break;
                    case 5: 
                        $nume_judet = 'Bihor'; 
                        break;
                    case 6: 
                        $nume_judet = 'Bistrița-Năsăud'; 
                        break;
                    case 7: 
                        $nume_judet = 'Botoșani'; 
                        break;
                    case 8: 
                        $nume_judet = 'Brașov'; 
                        break;
                    case 9: 
                        $nume_judet = 'Brăila'; 
                        break;
                    case 10: 
                        $nume_judet = 'Buzău'; 
                        break;
                    case 11: 
                        $nume_judet = 'Caraș-Severin'; 
                        break;
                    case 12: 
                        $nume_judet = 'Cluj'; 
                        break;
                    case 13: 
                        $nume_judet = 'Constanța'; 
                        break;
                    case 14: 
                        $nume_judet = 'Covasna'; 
                        break;
                    case 15: 
                        $nume_judet = 'Dâmbovița'; 
                        break;
                    case 16: 
                        $nume_judet = 'Dolj'; 
                        break;
                    case 17: 
                        $nume_judet = 'Galați';
                        break;
                    case 18: 
                        $nume_judet = 'Gorj'; 
                        break;
                    case 19: 
                        $nume_judet = 'Harghita'; 
                        break;
                    case 20: 
                        $nume_judet = 'Hunedoara'; 
                        break;
                    case 21: 
                        $nume_judet = 'Ialomița'; 
                        break;
                    case 22: 
                        $nume_judet = 'Iași'; 
                        break;
                    case 23: 
                        $nume_judet = 'Ilfov'; 
                        break;
                    case 24: 
                        $nume_judet = 'Maramureș'; 
                        break;
                    case 25: 
                        $nume_judet = 'Mehedinți'; 
                        break;
                    case 26: 
                        $nume_judet = 'Mureș'; 
                        break;
                    case 27: 
                        $nume_judet = 'Neamț'; 
                        break;
                    case 28: 
                        $nume_judet = 'Olt'; 
                        break;
                    case 29: 
                        $nume_judet = 'Prahova'; 
                        break;
                    case 30: 
                        $nume_judet = 'Satu Mare'; 
                        break;
                    case 31: 
                        $nume_judet = 'Sălaj'; 
                        break;
                    case 32: 
                        $nume_judet = 'Sibiu'; 
                        break;
                    case 33: 
                        $nume_judet = 'Suceava'; 
                        break;
                    case 34: 
                        $nume_judet = 'Teleorman'; 
                        break;
                    case 35: 
                        $nume_judet = 'Timiș'; 
                        break;
                    case 36: 
                        $nume_judet = 'Tulcea'; 
                        break;
                    case 37: 
                        $nume_judet = 'Vaslui'; 
                        break;
                    case 38: 
                        $nume_judet = 'Vâlcea'; 
                        break;
                    case 39: 
                        $nume_judet = 'Vrancea'; 
                        break;
                    case 40: 
                        $nume_judet = 'București'; 
                        break;
                    case 41: 
                        $nume_judet = 'București - Sector 1'; 
                        break;
                    case 42: 
                        $nume_judet = 'București - Sector 2'; 
                        break;
                    case 43: 
                        $nume_judet = 'București - Sector 3'; 
                        break;
                    case 44: 
                        $nume_judet = 'București - Sector 4'; 
                        break;
                    case 45: 
                        $nume_judet = 'București - Sector 5'; 
                        break;
                    case 46: 
                        $nume_judet = 'București - Sector 6'; 
                        break;
                    case 51: 
                        $nume_judet = 'Călărași'; 
                        break;
                    case 52: 
                        $nume_judet = 'Giurgiu'; 
                        break;
                    case 47: 
                        $nume_judet = 'Bucuresti - Sector 7 (desființat)'; 
                        break;
                    case 48: 
                        $nume_judet = 'Bucuresti - Sector 8 (desființat)'; 
                        break;
                    case 70: 
                        $nume_judet = 'Cod unic pentru orice înregistrare, indiferent de județul/locul unde a avut loc nașterea'; 
                        break;
                    default:
                        echo "Judetul de nastere este invalid. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                            <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#ZZ' target='_blank'> JJ </a>";
                        break;

                }
                if(isset($nume_judet)) {
                    echo "Judetul de nastere este $nume_judet. <br>";
                }

                // verificare numar secvential de atribuire NNN
                $numar_nastere = $array_cnp[9] * 100 + $array_cnp[10] * 10 + $array_cnp[11];
                if($numar_nastere === 1) {
                    echo "A fost prima nastere de sex $sex din $ziua_nastere/$luna_nastere/$an_nastere din judetul $nume_judet. <br>";

                } else if ($numar_nastere < 10) {
                    echo "A fost printre primele nasteri (mai precis a $numar_nastere-a nastere) de sex $sex din $ziua_nastere/$luna_nastere/$an_nastere din judetul $nume_judet. <br>. <br>";

                } else if ($numar_nastere < 1000) {
                    echo "A fost a $numar_nastere-a nastere de sex $sex din $ziua_nastere/$luna_nastere/$an_nastere din judetul $nume_judet. <br>";

                } else {
                    echo "<br>Numarul secvential de atribuire este invalid. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                        <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#NNN' target='_blank'> NNN </a>";
                }

                // cerificare cifra de control
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