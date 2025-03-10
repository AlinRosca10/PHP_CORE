<?php
    $i=0;
    do{
        if($i%2==1)
        {
            echo $i;
            echo "<br>";
        }
        $i++;
        continue;
    }while($i<15);

    // $i = 1; // Start from 1 since even numbers are skipped

    // do {
    //     echo $i . "<br>";
    //     $i += 2; // Increment by 2 to only print odd numbers
    // } while ($i < 15);

?>