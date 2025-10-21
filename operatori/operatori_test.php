<?php
    //1
    echo (((4 * 8) - 2) / 10);
    echo "<br>";
    echo (4 * 8 -2 / 10);
    echo "<br>";

    //2 
    $nr = -12;
    echo ($nr > 0) ? 'Numar pozitiv' : 'Numar negativ';
    echo "<br>";

    //3 
    $x = 3 * 3 % 5; // x = (3 * 3) % 5 = 4
    $y = (true ? 0 : true) ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 0 ? 1 : 2 = 2 In PHP 8, operatiunea ternara este evaluata de la stanga la dreapta si nu are asociativitate. De asemenea, daca contine intr-o expresie mai multi operatori ternari, expresia are nevoie de paranteze pentru a fi evaluata corect.
    echo "x = $x, y = $y";
    echo "<br>";
    $y = true ? 0 : (true ? 1 : 2); // true ? 0 : (true ? 1 : 2) = 0 Rezultatul este diferit fata de cel anterior din cauza parantezelor. Se evalueaza intai expresia din paranteze, apoi se aplica operatorul ternar.
    echo "x = $x, y = $y";
    echo "<br>";
    $y = true ? 0 : 1; // true ? 0 : 1 = 0 Rezultatul este tot 0 deoarece primul operand al operatorului ternar este true.
    echo "y = $y <br>";

    //4
    print ( "a" <=> "a");// 0 
    print ("<br>");
    print ( "a" <=> "b");// -1
    print ("<br>");
    print ( "b" <=> "a");// 1
    print ("<br>");

    //5
    echo $x = 10 + print (25); // Afiseaza 25, apoi $x = 10 + 1 (deoarece print returneaza 1), deci $x = 11
    
    //6
    $b = 90; // ~x = - (x + 1) sau 90 (decimal) = 1011010 (binar) => ~90 = -(1011010 + 1) = -10100101 (binar) = -91 (decimal)
    echo "<br>";
    echo $b; // 90
    echo "<br>";
    echo ~$b; // ~90 = -91
    echo "<br>";
    echo ~$b + 1; // ~90 + 1 = -91 + 1 = -90
    echo "<br>";
    echo ~$b + 2; // ~90 + 2 = -91 + 2 = -89
    echo "<br>";
    echo ~$b + 3; // ~90 + 3 = -91 + 3 = -88
    echo "<br>";
    echo ~~$b;

    //1 Ce va afisa urmatorul cod si de ce?
    echo "<br>";
    echo (12) + print(7); // Afiseaza 7, returneaza 1, apoi 13 (12 + 1(care a fost returnat de print))
    echo "<br>";

    //2 Care este rezultatul expresiei urmatoare si de ce?
    //echo 12 + echo (12); // Eroare deoarece echo nu returneaza nici o valoare, deci nu poate fi folosita intr-o expresie.

    //3 Care este rezultatul urmatoarei expresii si de ce?
    echo "<br>";
    echo 5 + 5 * 7 - 2; // 5 + (5 * 7) - 2 = 5 + 35 - 2 = 38 Asociativitate operatorilor: * / % au prioritate mai mare decat + - .
    echo "<br>";

    //4 Ce va afisa urmatorul cod si de ce?
    $php_var = 3 / 4;
    echo $php_var;// Afiseaza 0.75 deoarece in PHP, operatia de impartire returneaza un numar float.
    echo "<br>";

    //5 Care este rezultatul urmatoarei expresii si de ce?
    $php_var = 3 % 4 + 4 % 4 +5 % 4;
    echo $php_var; // 3 % 4 + 4 % 4 + 5 % 4 = 3 + 0 + 1 = 4 Operatorul modulo (%) returneaza restul impartirii a doua numere.
    echo "<br>";

    //6 Ce va afisa urmatorul cod si de ce?
    $x = "La";
    $y = "multi";
    $z = "ani";
    echo $x . " " . $y . " " . $z; // Afiseaza "La multi ani" deoarece operatorul de concatenare (.) concateneaza sirurile de caractere.
    echo "<br>";
    $q = $x . $y . $z;
    $x .= $y .= $z; // Echivalent cu $y = $y . $z; apoi $x = $x . $y;
    echo $q; // Afiseaza "Lamultiani" deoarece operatorul de concateneazare (.) concateneaza sirurile de caractere.
    echo "<br>";
    echo $x; // Afiseaza "Lamultiani" deoarece operatorul de concatenare (.) concateneaza sirurile de caractere.
    echo "<br>";

    //7 Care este rezultatul urmatoarei expresii si de ce?
    $y = 2;
    $w = 4;
    $y *= $w /= $y; // Echivalent cu $w = $w / $y; apoi $y = $y * $w; Deci $w = 4 / 2 = 2; apoi $y = 2 * 2 = 4;
    echo "y = $y, w = $w"; // Afiseaza "y = 4, w = 2"

    //8 Ce va afisa urmatorul cod si de ce?
    echo "<br>";
    echo 456 != 0456; // Afiseaza 1 (true) deoarece operatorul de comparatie (!=) verifica doar valoarea. 456 si 0456 nu sunt egale ca valoare (0456 este interpretat ca un numar octal, echivalent cu 302 in baza 10).
    echo "<br>";
    echo 456 !== 0456; // Afiseaza 1 (true) deoarece operatorul de identitate (===) verifica atat valoarea cat si tipul. 456 este un numar intreg, iar 0456 este interpretat ca un numar octal (echivalent cu 302 in baza 10). Deci cele doua valori sunt diferite.
    echo "<br>";

    //9 Care este rezultatul urmatoarei expresii si de ce?
    $x = 0;
    $y = 1;
    $z = false;
    echo $x || $y && !$z; // 0 || 1 && !false = 0 || 1 && true = 0  || 1 = 1 Operatorul && are prioritate mai mare decat ||.
    echo "<br>";

    var_dump($x == $z && $x == $y && $q = 100);// $x == $z && $x == $y && $q = 100 => 0 == false && 0 == 1 && $q = 100 => true && false && 100 => false Operatorul de atribuire (=) are cea mai mica prioritate.
    echo "<br>";
    var_dump($x, $y, $z, $q); // $x = 1, $y = 1, $z = false, $q = "Lamultiani", deoarece in expresia anterioara, $q nu a fost atribuit valoarea 100 deoarece expresia s-a oprit la primul false.
    echo "<br>";
    var_dump($x == $z && $x != $y && $qq = 100); // $x == $z && $x != $y && $qq = 100 => 0 == false && 0 != 1 && $qq = 100 => true && true && 100 => true
    echo "<br>";
    var_dump($x, $y, $z, $qq); // $x = 1, $y = 1, $z = false, $qq = 100 Aici valoarea 100 a fost atribuita lui $qq deoarece toate conditiile au fost adevarate.
    echo "<br>";
    var_dump($x == $z && $x == $y && $qqq = 100); // $x == $z && $x == $y && $qqq = 100 => 0 == false && 0 == 1 && $qqq = 100 => true && false && 100 => false
    echo "<br>";
    //var_dump($x, $y, $z, $qqq); // $x = 1, $y = 1, $z = false, $qqq nu este definit deoarece in expresia anterioara, $qqq nu a fost atribuit valoarea 100 deoarece expresia s-a oprit la primul false.
    echo "<br>";

    // 10 Ce va afisa urmatorul cod si de ce?
    $x = 0;
    $y = 1;
    $z = false;

    var_dump($x == $z && $x == $y); // $x == $z && $x == $y => 0 == false && 0 == 1 => true && false => false
    echo "<br><br>";

    //11 Care este rezultatul urmatoarei expresii si de ce?
    $x = 0;
    $y = 1;
    $z = false;

    var_dump($x == $z & $x == $y & $q = 100); // $x == $z & $x == $y & $q = 100 => 0 == false & 0 == 1 & $q = 100 => true & false & 100 => false Operatorul & evalueaza toti operandii, deci $q va fi atribuit valoarea 100. De asemenea, operatorul & are prioritate mai mare decat operatorul de atribuire (=).
    echo "<br>";// Operatorul & este un operator binar pe biti, dar in acest caz este folosit ca un operator logic.
    echo $q; // Afiseaza 100 deoarece in expresia anterioara, $q a fost atribuit valoarea 100.
    echo "<br>";

    //12 Ce va afisa urmatorul cod si de ce?
    print 5 << 6;// Afiseaza 320 deoarece operatorul de deplasare la stanga (<<) muta bitii numarului 5 cu 6 pozitii la stanga. In binar, 5 este reprezentat ca 0000 0101. Dupa deplasarea cu 6 pozitii la stanga, devine 1010 0000 0000, care este echivalent cu 320 in zecimal.
    echo "<br>";

    print 320 >> 6; // Afiseaza 5 deoarece operatorul de deplasare la dreapta (>>) muta bitii numarului 320 cu 6 pozitii la dreapta. In binar, 320 este reprezentat ca 0001 0100 0000. Dupa deplasarea cu 6 pozitii la dreapta, devine 0000 0101, care este echivalent cu 5 in zecimal.
    echo "<br>";
    print 5 & 3; // Afiseaza 1 deoarece operatorul & evalueaza bitii corespunzatori ai celor doua numere. In binar, 5 este 0101 si 3 este 0011. Dupa aplicarea operatorului &, rezultatul este 0001, care este echivalent cu 1 in zecimal.
    echo "<br>";
    print 5 | 3; // Afiseaza 7 deoarece operatorul | evalueaza bitii corespunzatori ai celor doua numere. In binar, 5 este 0101 si 3 este 0011. Dupa aplicarea operatorului |, rezultatul este 0111, care este echivalent cu 7 in zecimal.
    echo "<br>";
    print 5 ^ 3; // Afiseaza 6 deoarece operatorul ^ evalueaza bitii corespunzatori ai celor doua numere. In binar, 5 este 0101 si 3 este 0011. Dupa aplicarea operatorului ^, rezultatul este 0110, care este echivalent cu 6 in zecimal.
    echo "<br>";

    //13 Care este rezultatul urmatoarei expresii si de ce?
    print 5 >> 6; // Afiseaza 0 deoarece operatorul de deplasare la dreapta (>>) muta bitii numarului 5 cu 6 pozitii la dreapta. In binar, 5 este reprezentat ca 0000 0101. Dupa deplasarea cu 6 pozitii la dreapta, devine 0000 0000, care este echivalent cu 0 in zecimal.
    echo "<br>";
    echo "<br>";

    //14 Ce va afisa urmatorul cod si de ce?
    $rezultat = 0b10 + 010 + 10 + 0x10; // 0b10 (binar) = 2 (zecimal), 010 (octal) = 8 (zecimal), 10 (zecimal) = 10 (zecimal), 0x10 (hexazecimal) = 16 (zecimal) Deci, $rezultat = 2 + 8 + 10 + 16 = 36
    echo $rezultat; // Afiseaza 36
    echo "<br>";

    //15 Care este rezultatul urmatoarei expresii si de ce?
    echo ("PHP" <=> "JAVA");
    echo "<br>";
    echo ("PHP" <=> "ASP.NET");
    echo "<br>";
    echo ("PHP" <=> "PYTHON");
    echo "<br>";
    echo ("PHP" <=> "PHP"); // Afiseaza 0 deoarece cele doua siruri sunt identice.
    echo "<br>";
    echo ("PHP" <=> "php"); // Afiseaza -1 deoarece in ordinea lexicografica, "PHP" este mai mic decat "php" (litera majuscula are un cod ASCII mai mic decat litera minuscula).
    echo "<br>";

    //16 Ce va afisa urmatorul cod si de ce?
    $a = 10;
    echo ++$a; // Pre-incrementare: $a devine 11, apoi se afiseaza 11
    echo "<br>";
    echo $a++; // Post-incrementare: se afiseaza 11, apoi $a devine 12
    echo "<br>";
    echo $a;   // Afiseaza 12
    echo "<br>";
    echo ++$a; // Pre-incrementare: $a devine 13, apoi se afiseaza 13
    echo "<br>";

    //17 Care este rezultatul urmatoarei expresii si de ce?
    $a = 12;
    --$a; // Pre-decrementare: $a devine 11
    echo $a++; // Afiseaza 11
    echo "<br>";
    echo $a;   // Afiseaza 12
    echo "<br>";

    //18 Ce va afisa urmatorul cod si de ce?
    echo "<br>";
    $y = 2;   
    //**$y; // Eroare de sintaxa deoarece operatorul de exponentiere (**) nu poate fi folosit ca operator unar. Corect ar fi fost $y = $y ** 2; pentru a ridica $y la puterea a doua. In PHP, operatorul de exponentiere (**) este un operator binar care necesita doi operanzi. In PHP 8, nu exista operator unar pentru exponentiere. In schimb, pentru a ridica un numar la o putere, trebuie sa folosim operatorul binar ** cu doi operanzi. In PHP 7 si versiunile anterioare, operatorul de exponentiere (**) nu era disponibil deloc.
    echo $y;
    echo "<br><br>";

    //19 Ce va afisa urmatorul cod si de ce?
    $php_var = 10 === 10 ? '2' : '4'; // 10 === 10 este adevarat, deci se returneaza '2'
    echo $php_var; // Afiseaza '2'  
    echo "<br>";
    
    //20 Ce va afisa urmatorul cod si de ce?
    $x = 9;
    $y = 10;
    echo $x ^ $y; // Afiseaza 3 deoarece operatorul ^ evalueaza bitii corespunzatori ai celor doua numere. In binar, 9 este 1001 si 10 este 1010. Dupa aplicarea operatorului ^, rezultatul este 0011, care este echivalent cu 3 in zecimal.
    echo "<br>";
    echo $x & $y; // Afiseaza 8 deoarece operatorul & evalueaza bitii corespunzatori ai celor doua numere. In binar, 9 este 1001 si 10 este 1010. Dupa aplicarea operatorului &, rezultatul este 1000, care este echivalent cu 8 in zecimal.
    echo "<br>";
    echo $x | $y; // Afiseaza 11 deoarece operatorul | evalueaza bitii corespunzatori ai celor doua numere. In binar, 9 este 1001 si 10 este 1010. Dupa aplicarea operatorului |, rezultatul este 1011, care este echivalent cu 11 in zecimal.
    echo "<br>";
    echo ~$x; // Afiseaza -10 = -(9 + 1) deoarece operatorul de negare pe biti (~) inverseaza toti bitii numarului 9. In binar, 9 este 0000 1001. Dupa aplicarea operatorului ~, devine 1111 0110, care este echivalent cu -10 in zecimal (reprezentare in complement fata de doi).
    echo "<br>";
    echo ~$y; // Afiseaza -11 = -(10 + 1) deoarece operatorul de negare pe biti (~) inverseaza toti bitii numarului 10. In binar, 10 este 0000 1010. Dupa aplicarea operatorului ~, devine 1111 0101, care este echivalent cu -11 in zecimal (reprezentare in complement fata de doi).
    echo "<br>";

    //21 Care este rezultatul urmatoarei expresii si de ce?
    $user = 'admin';
    $username = $user ?? 'not access';// Deoarece $user este definit si are valoarea 'admin', operatorul null coalescent (??) va returna valoarea lui $user. Astfel, $username va fi 'admin'.
    print ($username); // Afiseaza 'admin';
    echo "<br>";
    print ("<br/>");

    $username2 = isset($user) ? $user : 'not access'; // Deoarece $user este definit si are valoarea 'admin', functia isset($user) va returna true, deci operatorul ternar va returna valoarea lui $user. Astfel, $username2 va fi 'admin'.
    print ($username2); // Afiseaza 'admin';
    echo "<br>";

    //22 Ce va afisa urmatorul cod si de ce? 
    $x = true;
    $y = false;

    $z = $x and $y;// Operatorul and are o prioritate mai mica decat operatorul de atribuire (=), deci expresia este echivalenta cu $z = ($x and $y); => $z = (true and false); => $z = false;
    var_dump($z); // Afiseaza bool(true)
    echo "<br>";

    $z = ($x and $y);// Folosind paranteze, expresia este echivalenta cu $z = (true and false); => $z = false;
    var_dump($z); // Afiseaza bool(false)
    echo "<br>";

    $w = $x && $y; // Operatorul && are o prioritate mai mare decat operatorul de atribuire (=), deci expresia este echivalenta cu $w = $x && $y; => $w = true && false; => $w = false;
    var_dump($w); // Afiseaza bool(false)
    echo "<br>";

    //23 Care este rezultatul urmatoarei expresii si de ce?
    $a = [
        1, 
        2,
        'one' => 'a1',
        'two' => 'a2',
        'three' => 'a3'
    ];

    $b = [
        3, 
        4,
        'two' => 'b2',
        'three' => 'b3',
        'four' => 'b4'
    ];
    var_dump($a + $b); // Operatorul de unire a array-urilor (+) combina cele doua array-uri, dar in cazul in care exista chei identice, valorile din primul array ($a) sunt pastrate. Deci rezultatul va fi: [1, 2, 'one' => 'a1', 'two' => 'a2', 'three' => 'a3', 0 => 3, 1 => 4, 'four' => 'b4']
    echo "<br>";

    array_merge($a, $b); // Functia array_merge() combina cele doua array-uri, iar in cazul in care exista chei identice, valorile din al doilea array ($b) suprascriu valorile din primul array ($a). Deci rezultatul va fi: [0 => 1, 1 => 2, 'one' => 'a1', 'two' => 'b2', 'three' => 'b3', 2 => 3, 3 => 4, 'four' => 'b4']
    array_replace($a, $b); // Functia array_replace() inlocuieste valorile din primul array ($a) cu valorile din al doilea array ($b) pentru cheile identice. Deci rezultatul va fi: [0 => 1, 1 => 2, 'one' => 'a1', 'two' => 'b2', 'three' => 'b3', 2 => 3, 3 => 4, 'four' => 'b4']
    var_dump(array_merge($a, $b)); // Afiseaza array-ul rezultat din combinarea celor doua array-uri folosind array_merge().
    echo "<br>";

    //24 Ce va afisa urmatorul cod si de ce?
    var_dump(123 == "123abc"); // Afiseaza bool(true) deoarece operatorul de egalitate (==) compara valorile dupa conversia tipurilor. Stringul "123abc" este convertit la numarul 123, deci comparatia este adevarata in PHP 7, dar in PHP 8 a fost introdusa o noua regula care face ca aceasta comparatie sa fie falsa.
    echo "<br>";
    var_dump(123 == "123"); // Afiseaza bool(true) deoarece operatorul de egalitate (==) compara valorile dupa conversia tipurilor. Stringul "123" este convertit la numarul 123, deci comparatia este adevarata.
    echo "<br>";
    var_dump(123 === "123abc"); // Afiseaza bool(false) deoarece operatorul de identitate (===) compara atat valorile cat si tipurile. 123 este un numar intreg, iar "123abc" este un string, deci comparatia este falsa.
    echo "<br>";
?>