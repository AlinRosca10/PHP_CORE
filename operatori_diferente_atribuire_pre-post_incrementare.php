<?php

    $a = 1;
    ++$a; // Pre-incrementare: $a devine 2
    $a *= $a; // $a devine 4 (2 * 2)
    echo $a--; // Afiseaza 4, apoi decrementeaza $a la 3
    

    $a = 10;
    echo "Valoarea initiala a lui a: $a<br>";
    echo "Pre-incrementare: " . ++$a . "<br>"; // Incrementeaza $a inainte de a-l folosi
    echo "Valoarea lui a dupa pre-incrementare: $a<br>"; // Afiseaza valoarea lui $a dupa pre-incrementare
    echo "Post-incrementare: " . $a++ . "<br>"; // Foloseste $a, apoi il incrementeaza
    echo "Valoarea lui a dupa post-incrementare: $a<br>"; // Afiseaza valoarea lui $a dupa post-incrementare

?>