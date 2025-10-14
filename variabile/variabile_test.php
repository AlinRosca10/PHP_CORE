<?php
    //phpinfo();

    // 1 - Declaring and using a variable in PHP
    $salut = 'Hello world';
    echo $salut;
    echo "<br>";
    echo PHP_EOL; // "/n" end of line

    // 2 - Variable naming conventions in PHP
    // Valid variable names
    $a = 10; // integer
    $A = 20;
    echo $a;
    echo PHP_EOL; // end of line
    echo $A; // case sensitive
    echo "<br>";

    // 3 - Variable variables in PHP
    $name = "Adrian";
    $$name = "Salut"; // variable, equivalent to $Adrian = "Salut"
    print($Adrian); // outputs "Salut"
    echo "<br>";
    echo PHP_EOL; // end of line

    // 4 - Checking variable types in PHP
    echo gettype($a); // integer
    echo PHP_EOL; // end of line
    echo gettype($Adrian); // string
    echo "<br>";
    echo PHP_EOL; // end of line

    // 5. Demonstrating variable references in PHP
    $x = 'abc';
    $y = &$x;
    echo $x; // outputs 'abc'
    echo "<br>";
    echo PHP_EOL; // end of line
    $y = 'def';
    echo $x; // outputs 'def' same as $y, because $y is a reference to $x and is the same variable of same memory zone
    echo "<br>";
    echo PHP_EOL;

    // 6. Demonstrating variable existence and destruction in PHP
    $z = 'script';
    var_dump(isset($z)); // true
    echo "<br>";
    unset($z); // destroy variable
    var_dump(isset($z)); // false
    echo "<br>";

    // 7. Superglobal variables in PHP
    // Predefined variables in PHP that are always accessible, regardless of scope
    var_export($_COOKIE); // superglobal variable, associative array
    echo "<br>";
    var_dump($_REQUEST);
    echo "<pre>";
    print_r($_SERVER);
    echo "<pre>";

    session_start();
    var_dump($_SESSION);

    var_dump($_GLOBALS); // superglobal variable that contains all global variables in the script
    echo "<br>";

    // 8. Using different data types (DateTime) in PHP
    $data = new DateTime();
    var_dump($data);

    // 9. Using objects in PHP
    // stdClass is a predefined class in PHP that is used to create generic objects
    $o = new StdClass(); // creating an instance of stdClass
    $o->nume = "Adrian"; // adding properties to the object
    $o->varsta = 30;
    $o->x = 'x is a property of the object $o';
    var_dump($o);
    echo "<br>";
    echo $o->nume; // accessing object properties
    echo "<br>";
    echo $o->varsta;
    echo "<br>";
    echo $o->x;
    echo "<br>";
    echo PHP_EOL;

    // 10.
    $fructe = array("mere", "pere", "banane", "struguri", "kiwi"); // indexed array
    var_export($fructe);
    echo "<br>";
    var_dump($fructe);
    echo "<br>";
    print_r($fructe);
    echo "<br>";
    echo $fructe[0]; // accessing array elements
    echo "<br>";
    print($fructe[1]); // accessing array elements
    echo "<br>";

?>