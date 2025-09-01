<?php
	$x = 10;
	$y = 20;
	$z = "Text";
	$text = "Text";
	$Text = "Text";
	$_text = "Text";
	
	echo $x + $y;
	//$1text = "Text" //incorect
	
	$a = 10;
	$age = 10;
	
	$b = TRUE;
	echo "<br>";
	echo $y;
	echo "<br>";
	echo $text;
	echo "<br>";
	
	define("NAME", "Thomas", false);
	echo NAME;
	
	echo "<br>";
	define("NAMEE", "Mara", true);
	echo namee;
	
	//Exercitiul 1
	$s = "localhost";
	$k = "root";
	$s = "";
	$b = "myDB";
	
	$dbServer = "localhost";
	$dbUtilizator = "root";
	$dbParola = "";
	$dbBaza = "myDB";
	
	//Exercitiul 2
	$x = 10;
	$y = 20;
	echo $x+$y;
	
	//Exercitiul 3
	$dbServer = "localhost";
	$dbUtilizator = "root";
	$dbParola = "myPass";
	$dbBaza = "myDB";
	
	define("DB_SERVER", "localhost");
	define("DB_UTILIZATOR","root");
	define("DB_PAROLA","myPass");
	define("DB_BAZA","myDB");
?>