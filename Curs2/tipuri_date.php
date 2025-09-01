<?php
//Scalar types
	//Integer
	$a = 1234; //decimal types
	$b = -123; //a negative number
	$c = 0123; //octal number (equivalent to 83 decimal)
	$d = 0x1A; //hexadecimmal number (equivalent to 26 decimal)
	$e = 0b11111111; //binary number (equivalent to 255 decimal)
	
	//Float
	$f = 1.234;
	$g = 1.2e3;
	$h = 7E-10;
	
	//String
	$i = 'This is a simple string';
	$j = "This is a simple string";
	$k = "100";
	$l = 'This is a simple string';
	
	//Boolean
	$m = True;
	$n = TRUE;
	$o = true;
	$p = false;
	
	/*
		cjhbajnkxslmL
		SDVSDVSVDV
		zdassvdddsasfdbsd
		asaDSDSDsdfdsfdSFS
	*/
	//Exercițiul 1 În aplicaţie, parola de identificare a utilizatorului se memorează în felul următor:
	
	$pass = 17909880234892834432;
	$pass = '17909880234892834432';
	echo $pass;
	echo '<br/>';
	
	//Exercițiul 2 În cadrul aplicaţiei PHP, se află o linie care emite date despre data și ora curente:
	echo "Current time: " . Date("h:i") . "h, day is: " . Date("D/M/y");
	echo "<br/>";
	echo "Current time: " . Date("h:i") . ", day is: " . Date("d/m/Y");
	echo "<br/>";
	
	//Exercițiul 3 În cadrul aplicaţiei, trebuie să se facă un sistem care va monitoriza operaţia de logare (dacă utilizatorul este logat sau nu). Trebuie să se determine tipul de dată în care va fi depozitată această informaţie.
	$username = "Alin";
	$pass = "sdfdadsd";
	if($username != "" & $pass != "") {
		$isLoggedIn = true; //boolean
	} else {
		$isLoggedIn = false; //boolean
	}
	echo $isLoggedIn ? "TRUE" : "FALSE";
	echo "<br/>";
	printf($h);
	
?>