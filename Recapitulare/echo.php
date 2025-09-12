<?php
    $b=1;
    echo $b. "\n";   
    print($b);
    echo "\n";
    $b=2;
    print $b. "\n";
    echo $b. "\n";
    echo($b. "\n");
    print(($b). "\n");
    print"Alin este cel mai tare";
    echo "\n";//in php se poate folosi echo si fara paranteze la fel si print
    //In PHP 8 merge fara (), dar inn PHP 7 merge doar cu () pentru print
    $a=5;
    //echo $b, $a; //merge
    echo $b, $a; //merge
    echo "\n";
    echo(print($b)). "\n"; //Din interior spre exterior, de la dreapta la stanga, prima data mi-l afiseaza pe b si dupa imi afiseaza ce se returneaza in urma apelarii lui print
    echo(print($a)). "\n";//Din interior spre exterior, de la dreapta la stanga, prima data mi-l afiseaza pe a si dupa imi afiseaza ce se returneaza in urma apelarii lui print
    echo('Adam'). "\n";
    echo(print('Adam')). "\n";
    $c=print($b);
    echo $c. "\n";
    $d=print($a). "\n";
    echo 15+16;
    echo "\n";
    print 15+16;
    echo "\n";
    echo 15+print(16);
    echo "\n";
    echo 322+print(16);//De la dreapta la stanga, din interior spre exterior.
    echo "\n";
    echo 20 +print (20);
    echo "\n";
    print 22+print(20);
    echo "\n";
    //print 20 + echo(20); //nu merge, echo nu e functie si nu se poate folosi in constructie, echo nu returneaza nimic drept urmare nu se poate aduna cu nimic
    echo "\n";
    $name="Adrian";
    $$name="Salut";
    print $Adrian;//referentiere indirecta, din interior spre exterior, variabila preia valoarea in cadrul celei de-a doua denumiri
    echo "\n";
    echo $name;
    echo "\n";
    $name_1="a";
    $$name_1="a1";  //referentiere indirecta, din interior spre exterior, variabila preia valoarea in cadrul celei de-a doua denumiri    
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
    print $$$$a10;
    echo "\n";
    print $$$$a7;
    echo "\n";
    print $$$$$$a7;
    echo "\n";
    print $$$$$$a8;
    echo "\n";
    print $$$a8;
    echo "\n";
    print $a1;
    echo "\n";
    $ab=151;//referentiere directa
    print $ab;    
    echo "\n";
    $ab=93;
    print $ab;
    echo "\n";
    $x='abc';//accesarea prin referentiere
    $y=&$x;//accesarea aceleasi zone de memorie, accesarea prin referentiere
    print $x;
    echo "\n";
    print $y;
    echo "\n";
    $x='def';
    print $x;
    echo "\n";
    print $y;
    echo "\n";
    echo "<br>";
    $bc=183;
    print $bc."\n";
    $bc=$ab;
    print $bc."\n";
    $bc=print($ab);
    echo "\n";
    $bc=print($ab). "\n";
    echo $bc;
    echo "\n";
    echo "<br>";

    $xx='abc';
    $yx=$xx;
    print $xx;
    echo "\n";
    print $yx;
    echo "\n";
    $xx='def';
    print $xx;
    echo "\n";
    print $yx;
    echo "\n";
    echo "<br>";
    $e='a1';
    $f='a2';
    $g='a3';
    $h='a4';
    $i='a5';
    $j='a6';
    echo $a3;
    echo "\n";
    echo $$$a3;
    echo "\n";
    $zz='abc';
    var_dump($zz);
    echo "\n";
    $zz1=-25;
    var_dump($zz1);
    echo "\n";
    echo 'Alin esti cel mai mare programator din intreaga lume!'. "\n";
    $variabile='Acesta este un sir de caractere';
    echo $variabile;//sirul de caractere este intre ghilimele simple si se executa mai repede decat daca ar fi in ghilimele duble
    echo "\n";
    $info='Se va afisa: $variabile';//sirul de caractere este intre ghilimele simple si nu se executa, se afiseaza asa cum este
    echo $info;
    echo "<br>";
    $info="Se va afisa: $variabile";//sirul de caractere este intre ghilimele duble si se executa, se afiseaza valoarea variabilei
    echo $info;
    echo "<br>";
    
    //heredoc si se comporta ca si "" intrepreteaza codul, e mai lent ca nowdoc;
    $name_1='Mihai';
    $str=<<<EOD
    Numele meu este $name_1.
    EOD;
    echo $str;
    echo "<br>";

    //nowdoc si se comporta ca si '' nu interpreteaza codul, e mai rapid ca heredoc;    
    $name_2="Alexis";   
    $str2=<<<'EOT'
    Numele meu este $name_2.    
    EOT;
    echo $str2;
    echo "<br>";

    $str=<<<EOD
    Numele meu este $name_2!
    EOD;
    echo $str;
    echo "<br>";

    $str10=<<<'EOT'
    Numele este $name_1 si al prietenei mele este $name_2!
    EOT;
    echo $str10;
    echo "<br>";

    $str10=<<<EOD
    Numele este $name_1 si al prietenei mele este $name_2!
    EOD;
    echo $str10;
    echo "<br>";

    $sir='Este important sa avem codul optimizat!';
    echo $sir;
    echo "<br>";

    echo 'Afiseaza un sir!';
    echo "\n";
    echo "Afiseaza link <a href='index.html'>PHP</a>";
    echo "\n";

    echo "Teste PHP \n Teste HTML";
    echo "\n";

    echo "It's PHP test";
    echo "<br>";

    $aaa=2.5;
    $bbb=5;
    $ccc=(int)$aaa+$bbb;
    echo $ccc;
    echo "<br>";

    $rezultat=11+011+0x11+0b11;
    echo $rezultat;
    echo "<br>";

    //$suma1=25+'25 lei'+"25"+'25'+'douazaci si cinci'; //In PHP8 nu merge ca am adunat sir de caractere non-numerice cu numere. In PHP7 merge, dar afiseaza avertizare ca incercam sa convertim un sir de caractere non-numerice in cifre, iar sirul de caractere non-numerice se converteste la 0.
    $suma1=25+'25 lei'+"25"+'25';//merge deoarece am adunat cifre care erau in siruri de caractere
    echo $suma1;//Daca incepeam cu un simbol non-numeric sau cu o litera, atunci se convertea sirul de caractere la 0
    echo "<br>";

    $array1=array("ion","vasile", "elena", "ioana", "maria");
    echo $array1[1]. "\n";
    echo $array1[4]. "\n";

    $array2=["magda", "roma","vasile", "ion", "mina", "ramona"];
    echo $array2[2]. "\n";
    echo $array2[3]. "\n";
    echo $array2[5]. "\n";

    $array3=array(
        'cursuri'=>array('php','html','java'),
        'sali'=>array('sala1','sala2','sala3')
    );
    //echo $array3[0][1]. ' '.$array3[1][2]. "\n";//nu merge nu confundaa cu alte limbaje de programare
    echo $array3['cursuri'][1]. ' '.$array3['sali'][2]. "\n";//merge, vezi ca sunt ghilimele la indici

    $array4=array(
        'cursuri'=>array('php','html','java'),
        'sali'=>array('sala1','sala2','sala3')
    );

    $produse=array(
                    array(
                        array("Epson Printer L110", 100, 4500),
                        array("Cannon Printer", 100, 5000), 
                        array("HP Laptop", 500, 40000)
                    ),
                    array(
                        array("Micromax Canvas Lite", 200, 9000),
                        array("Samsung Galaxy", 300, 15000), 
                        array("LAVA", 100, 4000)
                    )
    );
    echo $produse[1][1][0]. "\n";
    echo "<br>";
    echo $produse[0][2][0]. "\n";
    echo "<br>";
    echo $produse[0][2][1]. "\n";
    echo "<br>";
    echo $produse[1][2][0]. "\n";
    echo "<br>";

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Ferrari",
        "Lamborghini",
        "Pagani",
        "Koenigsegg",
        "Bugatti",
        "Aston Martin",
        "Maserati",
        "Porsche",
        "Mercedes",
        "Audi",
        "Volkswagen",
        "Ford",
        "Chevrolet",
        "Dodge",
        "Jeep",
        "Tesla",
        "Nissan",
        "Honda",
        "Mitsubishi",
        "Subaru",
        "Suzuki",
        "Kia",
        "Hyundai",
        "Renault",
        "Peugeot",
        "Citroen",
        "Opel",
        "Volvo",
        "Saab",
        "Jaguar",
        "Land Rover",
        "Mini",
        "Smart",
        "Lexus",
        "Infiniti",
        "Acura",
        "Buick",
        "Cadillac",
        "Lincoln",
        "Chrysler",
        "GMC",
        "Ram",
        "Fiat",
        "Alpine",
        "Dacia",
        "Lada",
        "Zastava",
        "Skoda",
        "Seat",
        "Toyota"
    ]);
    echo cars[1]. ' nu e '. cars[4]. "\n";
    echo "<br>";

    define("SALUT", "Bine ati venit la LinkAcademy!");
    echo SALUT. "\n";
    echo "<br>";

    define("SALUT2", "LinkAcademy va ureaza o seara cat mai placuta in continuare!", true);
    echo SALUT2. "\n";
    echo "<br>";    

    echo __LINE__. "\n";
    echo "<br>";

    echo __FILE__. "\n";
    echo "<br>";

    echo __DIR__. "\n";
    echo "<br>";

    echo __FUNCTION__. "\n";
    echo "<br>";

    echo __CLASS__. "\n";
    echo "<br>";

    echo __METHOD__. "\n";
    echo "<br>";

    echo __NAMESPACE__. "\n";
    echo "<br>";

    echo __TRAIT__. "\n";
    echo "<br>";
?>