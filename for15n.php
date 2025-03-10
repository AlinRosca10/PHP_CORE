<?php
    for ($i=0;$i<15;$i++)
    {
        if ($i%2== 0)
        {
            echo "".$i."doc".$i."";
            echo "<br>";
        }
        else
        {
            continue;//continua sa-mi afiseza si instructiunea de mai jos
        }
        echo "$i";
        echo "<br>";
    }
?>