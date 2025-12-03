<?php
    $a = false;
    if(!$a == ($b =! false)) echo "Salut"; // Atribuie valoarea true lui $b si compara $a cu true
    echo "<br>";
    if(!$a == ($b != false)) echo 'Salut'; // Compara $a cu rezultatul expresiei $b != false
?>