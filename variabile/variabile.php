<?php
    $name = "Adrian";
    $$name = "Salut"; 
    $$$name = "Salutare tuturor!";
    print $Adrian;// afiseaza Salut prin referntiere indirecta, urmareste variabila
    echo "<br>";
    echo $Salut;// afiseaza Salutare tuturor! prin referntiere indirecta, urmareste variabila
    echo '<br>';
    // $x = 'abc';
    // echo $x; // afiseaza abc
    // echo '<br>';
    // $y = &$x; // atribuire prin referinta, $y este o referinta catre $x
    // echo $y; // afiseaza abc
    // echo '<br>';
    // $y = "def"; // modifica $y, deci si $x
    // echo $x; // afiseaza def
    $x = 'abc';
    echo $x; // afiseaza abc
    echo '<br>';
    $y = $x; // atribuire, $y este atribuit valoarea lui $x
    echo $y; // afiseaza abc
    echo '<br>';
    $y = "def"; // modifica $y, deci si $x
    echo $x; // afiseaza def
    echo '<br> var_dump <br>';
    $z = 'abc';
    var_dump($z); // afiseaza tipul si valoarea variabilei
    echo '<br>'; 
    $z = 25;
    var_dump($z); // afiseaza tipul si valoarea variabilei spre deosebire de echo care afiseaza doar valoarea
    echo '<br>';
    $z = -25;
    var_dump($z); // afiseaza tipul si valoarea variabilei spre deosebire de echo care afiseaza doar valoarea
    echo '<br>Diferenta intre ghilimele simple si duble<br>';

    //$variabila = "Acesta este un sir de caractere';// Error
    $variabila = "Acesta este un sir de caractere";
    $info1 = 'Se va afisa: $variabila'; // nu face interpretare, e mai rapid
    $info2 = "Se va afisa: $variabila"; // face interpretare, e mai lent
    echo $info1;
    echo '<br>';
    echo $info2;
    echo '<br>HereDoc si NowDoc<br>';
    $nume = "Mihai";
    echo 'HereDoc<br>';
    // HereDoc
    $str = <<<EOD
    Numele meu este $nume.
    Am invatat PHP.
    EOD;
    echo $str;
    echo '<br>NOWDoc<br>';

    // NowDoc
    $str = <<<'EOT'
    Numele meu este $nume.
    Am invatat PHP.
    EOT;
    echo $str;
    echo '<br>';

    $sir = 'Este important sa avem codul optimizat!';
    echo($sir);
    echo '<br>';

    echo 'Afiseaza un sir';
    echo '<br>';

    echo 'Afiseaza link <a href="index.html">PHP</a>';

    echo '<br>';
    echo "Teste PHP \n Teste HTML";

    echo '<br>';
    echo "It's PHP test<br>";

    $a = 2.5;
    $b = 5;
    $c = (int)$a + $b; // conversie la intreg
    echo $c; // afiseaza 7
    echo '<br>';
    $d = (int)($a + $b); // conversie la intreg
    echo $d; // afiseaza 7
    echo '<br>';

    $rezultat = 11 + 011 + 0x11 + 0b11; // 11 + 9 + 17 + 3 = 40
    echo $rezultat; // afiseaza 40
    
    echo '<br>';
    $suma = 25 + "25 de lei" + "25" + '25'; // se face conversie la intreg si se aduna 25 + 25 + 25 + 25 = 100
    echo $suma; // afiseaza 100
    echo '<br>';

    echo "Suntem in PHP";
    echo '<br>';

    $array1 = array("ion", "vasile", "elena");
    print_r($array1); // afiseaza continutul array-ului
    echo '<br>';
    echo $array1[1]; // afiseaza vasile
    echo '<br>';

    $array2 = ["ion", "vasile", "elena"];
    print_r($array2); // afiseaza continutul array-ului 
    echo '<br>';
    echo $array2[1]; // afiseaza elena
    echo '<br>';
    var_dump($array2); // afiseaza tipul si continutul array-ului
    echo '<br>Matrice<br>';

    $array3 = array(
        'cursuri' => array('PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', 'Java'),
        'sali' => array('Sala 1', 'Sala 2', 'Sala 3', 'Sala 4', 'Sala 5', 'Sala 6')
    );

    echo $array3['cursuri'][3]; // afiseaza HTML
    echo '<br>';
    echo $array3['sali'][2];
    echo '<br>';

    $produse = array(
        array(
            array("Epson Printer L110", 100, 4500),
            array("Canon Printer", 100, 5000),
            array("HP Laptop", 500, 40000)
        ),
        array(
            array("Micromax Canvas Lite", 200, 9000),
            array("Samsung Galaxy", 300, 15000),
            array("LAVA", 100, 4000)
        )
    );
    echo $produse[1][1][0]; // afiseaza Samsung Galaxy

    echo '<br>';
    define("cars", [
        "Alfa Romeo", "BMW", "Toyota", "Volvo", "Mercedes", "Dacia", "Renault", "Audi", "Volkswagen", "Skoda"
    ]);
    echo cars[1]; // afiseaza BMW
    echo '<br>';

    define("SALUT", "Bine ati venit la LinkAcademy!");
    echo SALUT;
    echo '<br>';
    define("SALUT2", "LinkAcademy va ureaza o seara cat mai placuta!", true); // true pentru case insensitive
    echo SALUT2; // afiseaza LinkAcademy va ureaza o seara cat mai placuta!
    echo '<br>';
?>