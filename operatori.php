<?php
    echo 'Sunt cel mai bun programator din intreaga lume!';
	$a=3;
	echo $a++;//post incrementare, returneaza numarul si dupa il incrementeaza
	echo "\n";
	echo $a;
    echo "\n";
    echo ++$a;//pre incrementare, incrementeaza numarul si dupa il returneaza
    echo "\n";
    echo $a++;
    echo ++$a;
    echo "<br>";
    echo (((4*8)-2)/10);
    echo "<br>";
    echo (4*8-2/10);
    echo "<br>";
    echo 'Alin esti cel mai mare programator din toate timpurile!!!';
    $y=100;
    echo "<br>";
    echo $y++; //post incrementare, returneaza y si dupa il incrementeaza
    echo "<br>";
    echo $y;
    echo "<br>";
    echo ++$y; //pre incrementare, il incrementeaza si dupa il returneaza
    echo "<br>";
    echo $y;
    echo "<br>";
    $x='abc';
    $y=&$x; // atribuire prin referentiere
    echo $y; //abc
    echo PHP_EOL;
    $y='def';
    echo $x; //?????????
    echo "<br>";
    echo 'Alin nu mai exista nimeni ca tine!!!';
    echo "<br>";

    //exercitiul 1
    echo (((4*8)-2)/10); //3
    echo "<br>";
    echo (4*8-2/10);//impartirea e fixa
    echo "<br>";//31.8 si o face fixa
    echo 'Alin, in PHP impartirea este fixa!!!';
    echo "<br>";

    ///exercitiu 2
    $nr=0;
    echo ($nr>0)?'Numar pozitiv':'Numar negativ';//operator ternar 3 operanzi:conditia:valoarea adev si valoarea falsa
    echo "<br>";
    echo (($nr==0)?'Rezultatul e zero':(($nr>0)?'Numar pozitiv':'Numar negativ'));//merge operator ternar in operator ternar si operator ternar 3 operanzi:conditia:valoarea adev si valoarea falsa
    echo "<br>";
    
    //exercitiul 3
    $x1=3*3%5; //4
    $z11=true?0:(true?1:2);//In PHP8 ai nevoie de paranteze, operatorul ternar are prioritate mai mare decat operatorul de atribuire
    echo $x1;
    echo "<br>";
    echo $z11; 
    echo "<br>";
    echo $y1=true?1:0;
    echo "<br>";
    echo $y11=false?1:0;//In PHP8 valoare este initializata cu true
    echo "<br>";
    echo $x1;
    echo "<br>";
    echo $y1;
    echo "<br>";
    echo $az=(true?12:true)?1111:2;
    echo "<br>";

    //exercitiul 4
    print("a"<=>"a");print("<br>");//0 amandoua sunt egale
    print("a"<=>"b");print("<br>");//-1 a este mai mic decat b
    print("b"<=>"a");print("<br>");//1 b este mai mare decat a
    
    print(2<=>2);print("<br>");//0 amandoua sunt egale
    print(2<=>3);print("<br>");//-1 2 este mai mic decat 3
    print(3<=>2);print("<br>");//1 3 este mai mare decat 2

    //exercitiul 5
    echo $xx=10+print(25); //afiseaza 25 si returneaza 1; 10+1=11
    echo "<br>";

    //exercitiul 6
    $bb=90;//~x=-x-1 sau 90->1011010 ~1011010+1=1011011=-91
    //  90->1011010, daca bitul din stanga este 1 si este, numarul final va fi negativ dupa ~
    echo ~$bb;//-90-1=-91 numarul este negativ si se scade 1, o singura tilda, numar impar de tilde 1
    echo "<br>";
    echo ~~$bb;// numarul este pozitiv si este acelasi, 2 tilde numarul in sine, numar par de tilde
    echo "<br>";
    echo ~~~$bb;
    echo "<br>";
    echo ~~~~~~$bb;
    echo "<br>";
    $ab10=101;
    echo ~$ab10;//-102
    echo "<br>";
    echo ~~$ab10;//101
    echo "<br>";
    $ab10=-101;
    echo ~$ab10;//100
    echo "<br>";
    echo ~~$ab10;//-101
    echo "<br>";
    echo 'Alin esti cel mai mare programator din toate timpurile!!!';
    echo "<br>";

    //exercitiul 7
    var_dump(123=="123abc");
    echo "<br>";
    var_dump(123==="123abc");
    echo "<br>";
    echo "Urmareste si trezeste-te!!!<br>";

    //exercitiul 8
    $xxx=true;
    $yyy=false;

    $zzz=$xxx and $yyy;//and are prioritate mai mica decat &&, iar mai intai se face atribuirea, de aceea este true
    $www=$xxx && $yyy;
    var_dump($zzz);
    echo "<br>";
    var_dump($www);
    echo "<br>";

    //exercitiul 9
    $xxxx=0;
    $yyyy=1;
    $zzzz=false;

    var_dump($xxxx==$zzzz && $xxxx!=$yyyy && $qqqq=100);// e true , daca una dintre conditii era false $x==$y, atunci atribuirea nu se mai facea si aparea o eroare de definire
    echo "<br>";
    echo $qqqq;
    echo "<br>";

    //exercitiul 10
    $xxxx1=0;
    $yyyy1=1;
    $zzzz1=false;

    var_dump($xxxx1==$zzzz1 & $xxxx1==$yyyy1 & $qqqq1=100);//& are prioritate mai mica decat &&, imi arata valoarea 0 de tip intreg nu de tip boolean
    echo "<br>";
    echo $qqqq1;
    echo "<br>";
    
?>