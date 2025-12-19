<?php
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
    if (isset($nume_judet)) {
        echo "Judetul de nastere este $nume_judet. <br>";
    }
?>