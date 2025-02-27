<?php
    phpinfo();//functie care ofera informatii despre configuratia php
    //phpinfo(INFO_VARIABLES);//afiseaza variabilele predefinite
    //phpinfo(INFO_ENVIRONMENT);//afiseaza variabilele de mediul de lucru
    //phpinfo(INFO_GENERAL);//afiseaza informatii generale
    //phpinfo(INFO_CONFIGURATION);//afiseaza configuratia php
    //phpinfo(INFO_MODULES);//afiseaza modulele incarcate
    //phpinfo(INFO_LICENSE);//afiseaza licenta php
    //phpinfo(INFO_ALL);//afiseaza toate informatiile
    //phpinfo(INFO_CREDITS);//afiseaza contribuitorii

    //1
    $salut="Hello world!";
    echo $salut;
    echo PHP_EOL;

    echo "Alin esti cel mai bun programator din lume!";
    echo "<br>";
    
    //2
    $a=10;
    $b=20;
    echo $a+$b;
    echo PHP_EOL;

    //3
    $name="Alin";
    $$name="Salut, imi place sa programez!";
    echo $Alin;
    echo PHP_EOL;

    //4
    echo gettype($Alin);
    echo PHP_EOL;
    echo "<br>";

    //5 
    $x='abc';
    $y=&$x;//atribuire prin referentiere, acceseaza aceeasi zona de memorie
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    $x='def';
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";//break line linie noua

    //6 isset()verifica daca o variabila este setata(are o valoare alta decat nula)
    $z='script';
    var_dump(isset($z));
    echo "<br>";
    unset($z);//unset goleste zona de memorie, sterge variabila
    var_dump(isset($z));
    echo "<br>";

    //6.1 empty() verifica daca o variabila este goala
    $z='script';
    var_dump(empty($z));
    echo "<br>";
    unset($z);
    var_dump(empty($z));//true var_dump() afiseaza informatii despre o variabila
    echo "<br>";

    //7.1
    var_export($Alin);//afiseaza informatii despre o variabila
    echo "<br>";

    //7 
    var_export($_COOKIE);//afiseaza informatii despre cookie
    echo "<br>";
    var_dump($_REQUEST);//afiseaza informatii despre request    
    echo '<pre>';
    print_r($_SERVER);//afiseaza informatii despre request
    echo '<pre>';
    echo "<br>";
    var_dump($_GET);//afiseaza informatii despre get
    echo "<br>";
    var_dump($_POST);//afiseaza informatii despre post
    echo "<br>";
    var_dump($_FILES);//afiseaza informatii despre fisiere
    echo "<br>";
    var_dump($_ENV);//afiseaza informatii despre mediul de lucru
    echo "<br>";

    session_start();
    var_dump($_SESSION);//afiseaza informatii despre sesiune
    echo "<br>";
    var_dump($_GLOBALS);//afiseaza informatii despre variabilele globale

    //8
    $data=new DateTime();
    var_dump($data);//afiseaza informatii despre data
    echo "<br>";

    //9
    //stdClass is PHP's generic empty class, primarily used for object properties.
    $o=new stdClass();
    $o->name='name este o proprietate a obietului o';
    $o->age=25;
    var_dump($o);
    echo "<br>";

    //10
    $fructe=array('mere','pere','prune', 'cirese', 'visine', 'kiwi', 'portocale', 'banane', 'ananas', 'mango');
    var_export($fructe);
    echo "<br>";
    var_dump($fructe);
    echo "<br>";
    print_r($fructe);
    echo "<br>";

    //11
    $car[0][1]='BMW';
    $car[0][2]='Audi';
    $car[0][3]='Mercedes';
    $car[0][4]='Volkswagen';
    $car[0][5]='Ford';
    $car[0][6]='Renault';
    $car[0][7]='Peugeot';
    $car[0][8]='Citroen';
    $car[0][9]='Dacia';
    $car[0][10]='Skoda';
    $car[0][11]='GM';
    $car[0][12]='Cobalt';
    $car[0][13]='Chevrolet';
    $car[0][14]='Fiat';
    $car[0][15]='Onix';

    var_dump($_SERVER);//detalii despre server
    echo "<br>";
    echo "<pre>";
    print_r($_SERVER);
    echo "<br>";
?>
