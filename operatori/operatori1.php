<?php
    echo (((4*8)-2)/10). "<br>";
    echo (4*8-2/10). "<br>";//face impartirea lui 2 la 10 si apoi scade rezultatul din 4*8
    //phpinfo();
    //preincrementare
    $a=5;
    echo ++$a;//mai intai incrementeaza si dupa afiseaza
    echo "<br>";
    echo $a;
    echo "<br>";
    //postincrementare
    echo $a++;//mai intai afiseaza si dupa incrementeaza
    echo "<br>";
    echo $a;
    echo "<br>";
    //predecrementare
    echo --$a;//mai intai decrementeaza si dupa afiseaza
    echo "<br>";
    echo $a;
    echo "<br>";
    //postdecrementare
    echo $a--;//mai intai afiseaza si dupa decrementeaza
    echo "<br>";
    echo $a;
    echo "<br>";
    //atribuire
    $a=125;
    $b=30;
    $a+=$b;//$a=$a+$b//adunare
    echo $a;
    echo "<br>";
    $a-=$b;//$a=$a-$b//scadere
    echo $a;
    echo "<br>";
    $a*=$b;//$a=$a*$b//inmultire
    echo $a;
    echo "<br>";
    $a/=$b;//$a=$a/$b//impartire
    echo $a;
    echo "<br>";
    $a%=$b;//$a=$a%$b//restul impartirii(modulo)
    echo $a;
    echo "<br>";
    $a.=$b;//$a=$a.$b//concatenare
    echo $a;
    echo "<br>";
    $a^=$b;//$a=$a^$b//xor suma in binar si afisat in decimal
    echo $a;
    echo "<br>";
    $a&=$b;//$a=$a&$b//and numerele binare care sunt in ambele numere si afisat in decimal
    echo $a;
    echo "<br>";
    $a|=$b;//$a=$a|$b//or numerele binare care sunt in unul din numere si afisat in decimal
    echo $a;
    echo "<br>";
    echo 'Alin esti cel mai bun si mai mai mare programator din toate timpurile';
    echo "<br>";
    $a<<=$b;//$a=$a<<$b//shiftare la stanga cu $b biti a*2^b
    echo $a;
    echo "<br>";
    $a>>=$b;//$a=$a>>$b//shiftare la dreapta cu $b biti a/2^b
    echo $a;
    echo "<br>";
    echo 'Alin esti cel mai bun si mai mare programator din toate timpurile';
    echo "<br>";
    
    // 1
    echo (((4*8)-2)/10). "<br>";
    echo (4*8-2/10). "<br>";//face impartirea lui 2 la 10 si apoi scade rezultatul din 4*8
    echo 'Alin, in PHP impartirea este fixa!!!'. "<br>";
    echo "<br>";

    // 2
    $nr=-0;
    echo ($nr>0)?'Numar pozitiv':'Numar negativ'. "<br>";//operator ternar 3 operanzi:conditia:valoarea adev si valoarea falsa
    echo (($nr==0)?'Rezultatul e zero':(($nr>0)?'Numar pozitiv':'Numar negativ')). "<br>";//merge operator ternar in operator ternar si operator ternar 3 operanzi:conditia:valoarea adev si valoarea falsa
    echo "<br>";

    // 3
    $x1=3*3%5; //(3*3)%5=4 restul impartirii lui 9 la 5, are prioritate paranteza
    $y1=true?0:(true?1:2);//In PHP8 ai nevoie de paranteze, operatorul ternar are prioritate mai mare decat operatorul de atribuire
    echo $x1. "<br>";
    echo $y1. "<br>";
    echo $y1=true?1:0;
    echo "<br>";
    echo 'Alin esti cel mai bun programator din toate timpurile!!!';
    echo "<br>";
    echo $y3=(true?0:true)?1:2;//Atentie la ordinea parantezelor si la ordinea operanzilor
    echo "<br>";

    // 4
    print("a"<=>"a");print("<br>");//0 amandoua sunt egale
    print("a"<=>"b");print("<br>");//-1 a este mai mic decat b
    print("b"<=>"a");print("<br>");//1 b este mai mare decat a
    print("a"<=>"A");print("<br>");//1 a este mai mare decat A
    print("A"<=>"a");print("<br>");//-1 A este mai mic decat a

    echo "<br>";
    print("2"<=>"2");print("<br>");//0 amandoua sunt egale
    print("2"<=>"3");print("<br>");//-1 2 este mai mic decat 3
    print("3"<=>"2");print("<br>");//1 3 este mai mare decat 2

    // 5
    echo $x=10+print(25);//25 este afisat 10+1 de la print care returneaza 1
    echo "<br>";
    $x=10+print(25)+print(25);//2526 este afisat printeaza 25 si returneaza 1 care e adunat la printarea a doua a lui 25, deci 26
    echo "<br>";
    echo $x. "<br>";

    // 6
    $b=90;//~x=-x-1 sau 90->1011010 ~1011010+1=1011011=-91
    // // 90->1011010, daca bitul din stanga=1, numarul final va fi negativ dupa ~
    echo ~$b. "<br>";//-91 numarul este negativ si se scade 1, o singura tilda, numar impar de tilde 1
    echo ~~$b. "<br>";//90 numarul este pozitiv si este acelasi, 2 tilde numarul in sine, numar par de tilde
    echo ~~~$b. "<br>";//-91 numarul este negativ si se scade 1, 3 tilde, numar impar de tilde 1
    echo ~$b. "<br>"; 

    // Raspundeti la urmatoarele intrebari, apoi pentru verificare scrieti codul la fiecare intrebare
    // 1. Ce se intampla daca incrementati o variabila care nu a fost inca initializata?
    // Preia valoarea 0 si o incrementeaza cu 1.
    //echo ++$zzz;
    //echo "<br>";
    // 2. Ce se intampla daca incrementati o variabila care a fost initializata cu null?
    // Preia valoarea 0 si o incrementeaza cu 1.
    // $zzz=null;
    // echo ++$zzz;
    // echo "<br>";
    // 3. Ce se intampla daca incrementati o variabila care a fost initializata cu un string?
    // Preia valoarea ultimei litere in codul ASCII, o incrementeaza cu 1 si afiseaza string.
    // $zzz='asas';
    // echo ++$zzz;
    // echo "<br>";
    // 4. Ce se intampla daca incrementati o variabila care a fost initializata cu un string care contine un numar?
    // Preia numarul si il incrementeaza cu 1.
    // $zzz='11899';
    // echo ++$zzz;
    // echo "<br>";
    // 5. Ce se intampla daca incrementati o variabila care a fost initializata cu un string care contine un numar si un caracter?
    // Transforma caracterul in cod ASCII il incrementeaza cu 1 si il returneaza in string.
    // $zzz='321c';
    // echo ++$zzz;
    // echo "<br>";
    // 6. Ce se intampla daca incrementati o variabila care a fost initializata cu un string care contine un caracter si un numar?
    // Preia valoarea numarului si o incrementeaza cu 1.
    // $zzz='a763';
    // echo ++$zzz;
    // echo "<br>";
    // 7. Ce se intampla daca incrementati o variabila care a fost initializata cu un string care contine un caracter?
    // Preia valoarea caracterului in codul ASCII, o incrementeaza cu 1 si o returneaza ca si caracter.
    // $zzz='a';
    // echo ++$zzz;
    // echo "<br>";
    // 8. Ce se intampla daca incrementati o variabila care a fost initializata cu un string care contine un caracter si un caracter?
    // Preia valoarea ultimului caracter in ASCII, il incrementeaza cu 1 si afiseaza noul string.
    // $zzz='as';
    // echo ++$zzz;
    // echo "<br>";

    // 1 Ce va afisa urmatorul cod PHP?
    echo(12)+print(12);//12 este afisat si returneaza 1, 12+1=13
    echo "<br>";

    //2 Ce va afisa urmatorul cod PHP?
    echo(12)+print(12)+print(12);//12 este afisat si returneaza 1 dupa care este afisat 13 si returneaza 1, iar la sfarsit este afisat 12+1(care a fost returnat)=13
    echo "<br>";
    //echo(12)+echo(12);//eroare, echo nu returneaza nimic
    echo "<br>";

    //3 Ce va afisa urmatorul cod PHP?
    echo 5+5*7-2;//5*7=35, 35+5=40, 40-2=38
    echo "<br>";

    //4 Ce va afisa urmatorul cod PHP?
    $php_var=3/4;
    echo $php_var;//0.75
    echo "<br>";

    //5 Ce va afisa urmatorul cod PHP?
    $php_var=3%4+4%4+5%4;//3%4=3, 4%4=0, 5%4=1, 3+0+1=4
    echo $php_var;
    echo "<br>";

    //6 Ce va afisa urmatorul cod PHP?
    $x="La ";
    $y="multi ";
    $z="ani";
    $q=$x.$y.$z;//La multi ani
    $x .=$y .=$z;//La multi ani
    echo $q;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo $z;
    echo "<br>";

    //7 Ce va afisa urmatorul cod PHP?
    $y=2;
    $w=4;
    $y*=$w/=$y;//$w=4/2=2, $y=2*2=4 operatiile sunt de la dreapta la stanga
    echo $y;
    echo "<br>";
    echo $y, $w;
    echo "<br>";

    //7.1 Ce va afisa urmatorul cod PHP?
    $y=2;
    $w=4;
    $y*=$w=$y;//$w=2, $y=2*2=4 operatiile sunt de la dreapta la stanga
    echo $y;
    echo "<br>";
    echo $y, $w;
    echo "<br>";

    //8 Ce va afisa urmatorul cod PHP?
    echo 456 !==0456;//true (1), deoarece 456 este diferit de 0456, 456 este intreg si 0456 este octal
    echo "<br>";

    //8.1 Ce va afisa urmatorul cod PHP?
    echo 456 !=0456;//true (1), deoarece 456 nu este egal cu 0456, 456 este intreg si 0456 este octal
    echo "<br>";

    //9 Ce va afisa urmatorul cod PHP?
    $x=0;
    $y=1;
    $z=false;

    var_dump($x==$z && $x!=$y);//true, 0 este egal cu false si 0 este diferit de 1
    echo "<br>";

    //10 Ce va afisa urmatorul cod PHP?
    $x=0;
    $y=1;
    $z=false;

    var_dump($x==$z && $x!=$y && $q=100);//true, 0 este egal cu false, 0 este diferit de 1 si q primeste valoarea 100(atribuirea este adevarata)
    echo "<br>";
    echo $q;
    echo "<br>";

    //11 Ce va afisa urmatorul cod PHP?
    $x=0;
    $y=1;
    $z=false;

    var_dump($x==$z & $x!=$y & $q1=100);//true, 0 este egal cu false, 0 este diferit de 1 si q1 primeste valoarea 100(atribuirea este adevarata)
    echo "<br>";
    echo $q1;
    echo "<br>";

    //12 Ce va afisa urmatorul cod PHP?
    print 5<<6;//320, 5*2^6=320
    echo "<br>";

    //13 Ce va afisa urmatorul cod PHP?
    print 5>>6;//0, 5/2^6=0.078125
    echo "<br>";

    //14.1 Ce va afisa urmatorul cod PHP?
    print 5&6;//4, 5=101, 6=110, 101&110=100=4
    echo "<br>";

    //14.2 Ce va afisa urmatorul cod PHP?
    print 5|6;//7, 5=101, 6=110, 101|110=111=7
    echo "<br>";

    //14.3 Ce va afisa urmatorul cod PHP?
    print 5^6;//3, 5=101, 6=110, 101^110=011=3
    echo "<br>";

    //14.4 Ce va afisa urmatorul cod PHP?
    print ~5;//-6, ~5=-5-1=-6
    echo "<br>";

    //14 Ce va afisa urmatorul cod PHP?
    $rezultat=0b10+010+10+0x10;//2+8+10+16=36
    echo $rezultat;
    echo "<br>";

    //15 Ce va afisa urmatorul cod PHP?
    echo("PHP"<=>"PYTHON");//-1, PHP este mai mic decat PYTHON
    echo "<br>";
    echo("PHP"<=>"PHP");//0, PHP este egal cu PHP
    echo "<br>";
    echo("PHP"<=>"JAVA");//1, PHP este mai mare decat JAVA
    echo "<br>"; //COMPARA FIX ULTIMELE LITERE
    
    //16 Ce va afisa urmatorul cod PHP?
    $a=10;
    echo ++$a;//11
    echo "<br>";
    echo $a++;//11
    echo "<br>";
    echo $a;//12
    echo "<br>";
    echo --$a;//11
    echo "<br>";
    echo $a--;//11
    echo "<br>";

    //17 Ce va afisa urmatorul cod PHP?
    $a=12;
    --$a;
    echo $a;//11
    echo "<br>";
    $a--;
    echo $a;//10
    echo "<br>";
    ++$a;
    echo $a;//11
    echo "<br>";
    $a++;
    echo $a;//12
    echo "<br>";
    --$a;//11
    echo $a;
    echo "<br>";
    echo $a++;//11
    echo "<br>";
    echo $a;//12
    echo "<br>";
    echo ++$a;//13
    echo "<br>";

    //18 Ce va afisa urmatorul cod PHP?
    $y=2;
    //**$y;//eroare, nu exista operatorul **
    echo "<br>";

    //19 Ce va afisa urmatorul cod PHP?
    $php_var=10===10?'2':'4';//2, 10 este egal cu 10
    echo $php_var;
    echo "<br>";

    //20 Ce va afisa urmatorul cod PHP?
    $x=9;
    $y=10;
    echo $x^$y;//3, 9=1001, 10=1010, 1001^1010=0011=3
    echo "<br>";

    //21 Ce va afisa urmatorul cod PHP?
    $user='admin';
    $username=$user??'not access';//admin, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username;
    echo "<br/>";
    $username2=isset($user)?$user:'not access';//admin, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username2;
    echo "<br/>";

    //21.1 Ce va afisa urmatorul cod PHP?
    $user=null;
    $username=$user??'not access';//not access, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username;
    echo "<br/>";
    $username2=isset($user)?$user:'not access';//not access, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username2;
    echo "<br/>";
    $username3=$user??'not access';//not access, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username3;
    echo "<br/>";
    $username4=isset($user)?$user:'not access';//not access, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username4;
    echo "<br/>";
    $username5=$user??'not access';//not access, daca user este setat atunci afiseaza user, daca nu afiseaza not access
    echo $username5;
    echo "<br/>";

    //22 Ce va afisa urmatorul cod PHP?
    $x=true;
    $y=false;
    
    $z=$x and $y;//1, and are prioritate mai mica decat =, deci se atribuie $x lui $z, adica 1
    echo $z;
    echo "<br>";
    $w=$x && $y;//0, && are prioritate mai mare decat =, deci se atribuie rezultatul lui $w, adica 0
    echo $w;
    echo "<br>";
    $zz=$x or $y;//1, or are prioritate mai mica decat =, deci se atribuie $x lui $zz, adica 1
    echo $zz;
    echo "<br>";
    $ww=$x || $y;//1, || are prioritate mai mare decat =, deci se atribuie rezultatul lui $ww, adica 1
    echo $ww;
    echo "<br>";

    var_dump($z);// true
    echo "<br>";
    var_dump($w);// false
    echo "<br>";
    var_dump($zz);// true
    echo "<br>";
    var_dump($ww);// true
    echo "<br>";

    //23 Ce va afisa urmatorul cod PHP?
    $aaa=[1,2,'one'=>'a1','two'=>'a2'];
    $bbb=[2,3,'two'=>'b2','three'=>'b3'];

    var_dump($aaa+$bbb);//1,2,a1,a2,3,b2,b3
    echo "<br>";

    echo 'Alin esti cel mai bun programator din toate timpurile!!!';
    echo "<br>";

    array_merge($aaa,$bbb);//1,2,a1,a2,3,b2,b3
    print_r($aaa);
    echo "<br>";

    array_replace($aaa,$bbb);//1,2,a1,a2,3,b2,b3
    print_r($aaa);
    echo "<br>";

    $c=$aaa+$bbb;//1,2,a1,a2,3,b2,b3
    print_r($c);
    echo "<br>";

    //24 Ce va afisa urmatorul cod PHP?
    echo "Alin este cel mai bun programator din toate timpurile!!!";
    echo "<br>";
    var_dump(123==="123abc");//false, 123 este diferit ca identitate de 123abc
    echo "<br>";
    var_dump(123=="123");//true, cast
    echo "<br>";
    var_dump(123=="123abc");//false, in php 8 folosind var_dump se converteste tot stringul
    echo "<br>";
    echo 'Alin este cel mai bun programator din toate timpurile!!!';
    echo "<br>";
    var_dump(123==(int)'123abc');//conversie explicita in numar intreg asigura acelasi rationament ca in PHP7
    echo '<br>';
    var_dump(123==(is_numeric("123abc")?(int)"123abc":(int)"123abc"));//conversie explicita cu is_numeric
    echo "<br>";
?>