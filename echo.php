<?php
    $a=1;
    echo $a. "\n";
    print($a);
    echo ($a. "\n");
    $b=2;
    print $b. "\n"; // in PHP 8 merge fara (), dar inn PHP 7 merge doar cu ()
    //print $a, $b;
    //echo($a, $b); nu merge
    echo $a. "\n", $b. "\n";
    echo (print($a)). "\n";
    echo (print($b)). "\n";
    //print (echo($b)). "\n"; echo nu e functie si nu se poate folosi in constructie
    $c=print($a);
    echo $c. "\n";
    $d=print($b);
    echo $d. "\n";
    $e=print($a). "\n";
    $f=print($b). "\n";
    echo 15+17;
    echo "\n";
    echo 16+print(16);
    echo "\n";
    echo 17+print(20);
    echo "\n";
    echo 24+print(20);
    echo "\n";
    echo 20+print(20);
    echo "\n";
    $name="Adrian"; //referentiere indirecta
    $$name="Salut"; //referentiere indirecta
    print $Adrian; //referentiere indirecta
    echo "\n"; //referentiere indirecta
    echo $name; //referentiere indirecta
    echo "\n";
    $name_1="a";
    $$name_1="a1";
    $$$name_1="a2";
    $$$$name_1="a3";
    $$$$$name_1="a4";
    $$$$$$name_1="a5";
    $$$$$$$name_1="a6";
    $$$$$$$$name_1="a7";
    $$$$$$$$$name_1="a8";
    $$$$$$$$$$name_1="a9";
    $$$$$$$$$$$name_1="a10";
    $$$$$$$$$$$$name_1="a11";
    $$$$$$$$$$$$$name_1="a12";
    $$$$$$$$$$$$$$name_1="a13";
    $$$$$$$$$$$$$$$name_1="a14";
    print $$$$a10; //referentiere directa
    echo "\n";  //referentiere directa
    print $$$$$$a5;
    echo "\n";
    print $$$$$$$$a1;
    echo "\n";
    print $a1;
    echo "\n";
    $ab=15;
    print $ab;
    echo "\n";
    $ab=93;
    print $ab;
    echo "\n";
    $bc=183;
    print $bc."\n";
    $bc=$ab;
    print $bc. "\n";
    print $ab. "\n";

    $x='abc'; //Atribuire prin referenta, aceeasi valoare, aceeasi zona de memorie, valorile variabilelor sunt dependente una de alta
    $z=&$x;
    $y=&$x;
    print $x. "\n";
    print $y. "\n";
    print $z. "\n";
    $y='def';
    print $y. "\n";
    print $x. "\n";
    print $z. "\n";
    echo "<br>"; //break line linia urmatoare

    $x1=11; //zone de memorie diferita, valori sunt independente una de alta, pot sa aiba aceeasi valoare sau nu in functie de cod
    $y1=$x1;
    $z1=$y1;
    print $x1. "\n";
    print $y1. "\n";
    print $z1. "\n";
    $y1=222;
    print $y1. "\n";
    print $x1. "\n";
    print $z1. "\n";
    echo "<br>"; //break line linia urmatoare

    $z12=12;
    var_dump($z12);
    echo "<br>";
    if(isset($z12)==true)
    {
        echo $z12;
        echo "<br>";
    }
    else
    {
        print "Variabila nu a fost declarata!!!";
        echo "<br>";
    }
    if(empty($z12)==true)
    {
        echo 'Variabila este goala';
    }
    else
    {
        echo $z12;
    }
    unset($z12);
    echo $z12; //a golit-o
    echo "sa vedem";
    echo "\n";
    echo "rr";
    echo "\t";
    echo "rr";
    echo "\"";
    echo "rr2";
    echo "\0";
    echo "rr1";
    echo "\r";
    echo "rr3";
    echo "\$";
    echo "rr4". " romario";
    echo "<br>";

    $variable="Acesta este un sir de caractere"; 
    print $variable;
    echo "<br>";

    $info1="Se va afisa: $variable"; //Executa mai greu, dar in acelasi timp intrepreteaza sirul
    $info2='Se va afisa: $variable'; //Executa mai rapid, dar in acelasi timp nu intrepreteaza sirul
    echo $info1;
    echo "<br>";
    echo $info2;
    
    echo "<br>";
    $variable_10='Alin esti cel mai bun programator din intreaga lume!!!';
    echo "Stiu ca: $variable_10";

    echo "<br>";
    $name_1='Mihai';
    $str=<<<EOD
    Numele meu este "$name_1".
    EOD; //heredoc si se comporta ca si "" intrepreteaza codul, e mai lent;
    echo $str;

    echo "<br>";
    $name_2="Alexis";
    $str2=<<<'EOT'
    Numele meu este "$name_2".
    EOT; //nowdoc si se comporta ca si '' nu interpreteaza codul, e mai rapid
    echo $str2;
    
    echo "<br>";
    $name_1='Mihai';
    $str=<<<E
    Numele meu este "$name_1".
    E; //heredoc si se comporta ca si "" intrepreteaza codul, e mai lent;
    echo $str;

    echo "<br>";
    $name_2="Alexis";
    $str2=<<<'E'
    Numele meu este "$name_2".
    E; //nowdoc si se comporta ca si '' nu interpreteaza codul, e mai rapid
    echo $str2;

    echo "<br>";
    $array1=array("ion","elena","ioana");
    $array2=["magda", "roma", "mina", "ramona"];
    print $array1[1];
    echo "<br>";
    print $array2[2];

    echo "<br>";
    if(is_null($america_1)==true)
    {
        $america_1="Marte";
    }
    else
    {
        $america_1=0;
    }
    print $america_1;
    echo "<br>";
    print __LINE__;
    echo "<br>";
    print __CLASS__;
    echo "<br>";
    print __DIR__;
    echo "<br>";
    print __FILE__;
    echo "<br>";
    print __FUNCTION__;
    echo "<br>";
    print __METHOD__;

    echo "<br>";
    $sir='Este important sa avem codul optimizat';
    echo $sir;

    echo "<br>";
    echo "Afiseaza un sir";
    echo "<br>";
    echo 'Afiseaza link <a href="index.html">PHP</a>';
    echo "<br>";
    echo "Teste PHP \n Teste HTML";
    echo "<br>";
    echo "It's PHP test!!!";
    echo "<br>";
    print __LINE__;
    
    echo "<br>";
    $rezultat=11+011+0x11+0b11;
    print $rezultat;
    echo "<br>";
    print 0x1050;
    echo "<br>";
    print 0x1056;

    echo "<br>";
    $suma122=25+'25 lei'+"25"+'25'; //In PHP8 nu mai ia sirul de caractere fie ca e cu "" sau '' nu il ia ca zero il ia ca null
    echo $suma122;

    echo "<br>";
    $array3=array("ion", "vasile", "elena");
    $array4=["ion", "vasile", "elena", "miruna", "alexandra"];
    echo $array3[1];
    echo "<br>";
    echo $array4[1];

    echo "<br>";
    $array5=array(
        'cursuri'=>array('php', 'html', 'java'),
        'sali'=>array('sala1', 'sala2', 'sala3')
    );
    echo $array5['cursuri'][1]. ' '.$array5['sali'][2];

    echo "<br>";
    $produse=array(
        array(
            array("Epson Printer L110",100,4500),
            array("Cannon Printer", 100, 500),
            array("HP Laptop", 500, 40000)
        ),
        array(
            array("Micromax Canvas Lite", 200, 9000),
            array("Samsung Galaxy", 300, 15000),
            array("Lava", 100, 4000)
        )
    );
    echo $produse[1][1][0];
    echo "<br>";
    echo $produse[1][1][1];

    echo "<br>";// constanta tablou
    define("CARS", ["Alfa Romeo", "BMW", "Toyota", "Lambrghini", "Pagani", "Koenigseg"]);
    echo CARS[1]. ' nu e '. CARS[4];

    echo "<br>";
    define("SALUT", "Bine ati venit la LinkAcademy!");
    echo SALUT;

    echo "<br>";
    define("SALUT2", "LinkAcademy va ureaza o seara cat mai placuta in continuare!", true);
    echo SALUT2;// fiind case sensitive adevarat se scrie cum s-a definit
    echo "<br>";
?>