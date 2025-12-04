<h1>Teste PHP Inclusion</h1>
<h2>Continut incarcat din fisierul Teste.php</h2>
<?php
    echo "Hello from curs_4/teste.php";
    echo "<br>";

    $x = 10;
    $y = 2000;
    $sum = $x + $y;
    echo "The sum of $x and $y is: $sum";

    echo "This is a test file for inclusion.";
    echo "<br>";
    echo "Current timestamp: " . time();
    echo "<br>";
    echo "Random number: " . rand(1, 100);
    echo "<br>";
    echo "End of teste.php content.";
?>