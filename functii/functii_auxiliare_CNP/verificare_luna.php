<?php
    //verificare luna de nastere LL
    function verificare_luna(array $array_cnp, int $zile_maxim_luna)
    {
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
            default:
                echo "<br>Luna de nastere este invalida. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                                        <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#LL' target='_blank'> LL </a>";
                break;
        }
        if (!isset($luna_nastere_string)) {
            $luna_nastere_string = null;
        } else {
            echo "<br>Luna de nastere este $luna_nastere_string si a avut un numar maxim de $zile_maxim_luna zile. <br>";
        }
        return ['luna_nastere_string' => $luna_nastere_string, 'luna_nastere' => $luna_nastere, 'zile_maxim_luna' => $zile_maxim_luna];
    }
?>