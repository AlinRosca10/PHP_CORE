<?php
    // verificare ziua de nastere ZZ
    function verificare_zi(array $array_cnp, int $zile_maxim_luna){
        $ziua_nastere = $array_cnp[5] * 10 + $array_cnp[6];
        if (($ziua_nastere <= 0) || ($ziua_nastere > $zile_maxim_luna)) {
            $ziua_nastere = null;
            echo "Ziua de nastere este invalida. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                                    <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#ZZ' target='_blank'> ZZ </a>";
        } else {
            echo "Ziua de nastere este $ziua_nastere. <br>";
        }
        return ['ziua_nastere' => $ziua_nastere];
    }
?>
