<?php
    //$x=$_GET["x"];
    $x=rand(0,59);
    if($x<1){
        echo '<div style="color: red;">';
        echo 'Ati ramas fara combustibil. Trebuie sa oprim!' . ' Aveti ' .$x .' l!';
        echo '<br>';
        echo 'Autonomia masinii este '. $x/2.8*100 .' km!';
    }elseif($x<10){
        echo '<div style="color: orange;">';
        echo 'Va rog sa alimentati!';
        echo "<br>";
        echo 'Autonomia masinii este '. $x/2.8*100 .' km!' . ' Aveti ' .$x .' l!';
    }else{
        echo '<div style="color: green;">';
        echo 'Autonomia masinii este '. $x/2.8*100 .' km!' . ' Aveti ' .$x .' l.';
    }
?>