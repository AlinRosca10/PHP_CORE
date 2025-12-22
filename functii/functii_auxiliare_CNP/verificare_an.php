<?php
    // verificare an nastere AA
    function verificare_an(array $array_cnp){
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
        return ['an_nastere' => $an_nastere, 'zile_maxim_luna' => $zile_maxim_luna, 'rezidenta_straina' => $rezidenta_straina ?? false, 'strain' => $strain ?? false, 'an_bisect' => $an_bisect];
    }
?>