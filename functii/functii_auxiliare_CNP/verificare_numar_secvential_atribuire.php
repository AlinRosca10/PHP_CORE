<?php
    // verificare numar secvential de atribuire NNN
    function verificare_numar_secvential_atribuire(array $array_cnp, string $sex, int $ziua_nastere, int $luna_nastere, int $an_nastere, string $nume_judet){
        $numar_nastere = $array_cnp[9] * 100 + $array_cnp[10] * 10 + $array_cnp[11];
        if ($numar_nastere === 1) {
            echo "A fost prima nastere de sex $sex din $ziua_nastere/$luna_nastere/$an_nastere din judetul $nume_judet. <br>";
        } else if ($numar_nastere < 10 && $numar_nastere > 1) {
            echo "A fost printre primele nasteri (mai precis a $numar_nastere-a nastere) de sex $sex din $ziua_nastere/$luna_nastere/$an_nastere din judetul $nume_judet. <br>";
        } else if ($numar_nastere < 1000 && $numar_nastere >= 10) {
            echo "A fost a $numar_nastere-a nastere de sex $sex din $ziua_nastere/$luna_nastere/$an_nastere din judetul $nume_judet. <br>";
        } else {
            $numar_nastere = null;
            echo "Numarul secvential de atribuire este invalid. Va rog sa introduceti un cod numeric personal (C.N.P.) valid de tipul 
                                <a href='https://ro.wikipedia.org/wiki/Cod_numeric_personal_(Rom%C3%A2nia)#NNN' target='_blank'> NNN </a>";
        }
    
        return ['numar_nastere' => $numar_nastere];
    }
?>