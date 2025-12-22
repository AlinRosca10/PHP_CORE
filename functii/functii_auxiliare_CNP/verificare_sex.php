<?php
    // verificare sex S
    function verificare_sex (array $array_cnp) {
        $sex = ($array_cnp[0] % 2 === 0) ? 'Feminin' : 'Masculin';
        echo "Sexul este $sex. <br>";
        return ['sex' => $sex];
    }
?>
