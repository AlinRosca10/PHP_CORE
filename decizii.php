<!DOCTYPE html>
<html lang="en" style="
--g1:#ff8c00;
--g2:#ff2e63;
--g3:#9c1aff;
--g4:#00fff5;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.2">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Decision Document</title>
    <link rel="icon" type="image/x-icon" href="decizii_icon/decision_icon.png">
    <link rel="stylesheet" href="decizii_style/style.css">
</head>
<body>
    <header class="aurora-input aurora">
        <h1>PHP Decision Making</h1>
        <h2>1. Sa se verifice daca un numar generat cu functia rand(1, 30) este par sau impar.</h2>
        <form method="post">
            <button type="submit" name="check_parity" class="aurora-button">Check Parity</button>
        </form>
        <?php
            if (isset($_POST['check_parity'])) {

                $number = rand(1, 30);
                echo "<p>Generated number: $number</p>";

                if ($number % 2 == 0) {
                    echo "<p>The number $number is even.</p>";
                } else {
                    echo "<p>The number $number is odd.</p>";
                }
            }

            if (isset($_POST['check_parity'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }

            if (isset($_POST['check_parity'])) {

                $number = rand(1, 30);
                echo "<p>Generated number: $number</p>";
                
                if ($number % 2 === 0) {
                    echo "<p>The number $number is even.</p>";
                } else {
                    echo "<p>The number $number is odd.</p>";
                }
            }

            if (isset($_POST['check_parity'])) {
                echo '<a href="main_decison.php" class="aurora-input" target="_blank">Go back to Main Decision</a>';
            }
        ?>
        <h2>2. Scrieti un algoritm care sa determine maximul dintre doua numere.</h2>
        <form method="post">
            <button type="submit" name="find_max" class="aurora-button">Find Max</button>
        </form>
        <?php

            if (isset($_POST['find_max'])) {

                $num1 = rand(1, 100);
                $num2 = rand(1, 100);
                echo "<p>Generated numbers: $num1 and $num2</p>";

                if ($num1 > $num2) {
                    echo "<p>The maximum number is $num1.</p>";
                } elseif ($num2 > $num1) {
                    echo "<p>The maximum number is $num2.</p>";
                } else {
                    echo "<p>Both numbers are equal.</p>";
                }
            }

            if (isset($_POST['find_max'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }

        ?>

        <h2>3. Scrieti un algoritm care sa determine maximul dintre trei numere</h2>
        <form method="post">
            <button type="submit" name="find_max_of_three" class="aurora-button">Check max of Three Numbers</button>
        </form>
        <?php
        
            if (isset($_POST['find_max_of_three'])) {

                $num1 = rand(0, 100);
                $num2 = rand(0, 100);
                $num3 = rand(0, 100);
                echo "<p>Generated numbers: $num1, $num2, and $num3</p>";

                if ($num1 >= $num2 && $num1 >= $num3) {
                    echo "<p>The maximum number is $num1.</p>";
                } elseif ($num2 >= $num1 && $num2 >= $num3) {
                    echo "<p>The maximum number is $num2.</p>";
                } else {
                    echo "<p>The maximum number is $num3.</p>";
                }
            }
            if (isset($_POST['find_max_of_three'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>4. Intr-un parc se joaca 3 copii care au greutatile a, b, c. Sa se se stabileasca daca se pot aseza pe un balansoar astfel incat acesta sa fie in echilibru</h2>
        <form method="post">
            <button type="submit" name="check_balance" class="aurora-button">Check Balance</button>
        </form>
        <?php
            if (isset($_POST['check_balance'])) {

                $a = rand(20, 100); // Weight of child 1
                $b = rand(20, 100); // Weight of child 2
                $c = rand(41, 100); // Weight of child 3

                echo "<p>The weights of children a = $a kilograms.</p>";
                echo "<p>The weights of children b = $b kilograms.</p>";
                echo "<p>The weights of children c = $c kilograms.</p>";

                // Check if any two children can balance the seesaw
                if ($a + $b == $c) {
                    echo "<p>The children can balance the seesaw. Children with weight a = $a kilograms and children with weight b = $b kilograms can be put on one side, and child c = $c kilograms who weighs the same as both of them together is put on the other side.</p>";
                } elseif ($a + $c == $b) {
                    echo "<p>The children can balance the seesaw. Children with weight a = $a kilograms and children with weight c = $c kilograms can be put on one side, and child b = $b kilograms who weighs the same as both of them together is put on the other side.</p>";
                } elseif ($b + $c == $a) {
                    echo "<p>The children can balance the seesaw. Children with weight b = $b kilograms and children with weight c = $c kilograms can be put on one side, and child a = $a kilograms who weighs the same as both of them together is put on the other side.</p>";
                } else {
                    echo "<p>The children cannot balance the seesaw.</p>";
                }
            }
            if (isset($_POST['check_balance'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>5. Se citesc varsta, inaltimea, si sexul unei persoane. Sa se calculeze greutatea optima ideala, dupa formula: $g = 50 + 0.75 * ($i -150) + ($v - 20) / 4 pentru baieti si $g = $g * 0.9 pentru fete</h2>
        <form method="post">
            <button type="submit" name="check_eligibility" class="aurora-button">Check Eligibility</button>
        </form>
        <?php
            if (isset($_POST['check_eligibility'])) {

                $v = rand(10, 30); // Age
                $h = rand(140, 220); // Height in cm
                $s = rand(0, 1) ? 'M' : 'F'; // Sex
                echo "<p>Age: $v years</p>";
                echo "<p>Height: $h cm</p>";
                echo "<p>Sex: $s</p>";
                if (($s == 'M' && $v >= 18 && $h >= 180) || ($s == 'F' && $v >= 18 && $h >= 175)) {
                    echo "<p>The person is eligible in terms of age, height and sex.</p>";
                } else {
                    echo "<p>The person is not eligible.</p>";
                }
                $g = 50 + 0.75 * ($h - 150) + ($v - 20) / 4;
                if ($s == 'F') {
                    $g = $g * 0.9;
                }
                echo "<p>The ideal weight is: " . round($g, 2) . " kg.</p>";
            }
            if (isset($_POST['check_eligibility'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        
        <h2>6. Sa se verifice daca un numar generat cu functia rand(1, 10) este par sau impar.</h2>
        <form method="post">
            <button type="submit" name="check_parity_10" class="aurora-button">Check Parity (1-10)</button>
        </form>
        <?php
            if (isset($_POST['check_parity_10'])) {

                $number = rand(1, 10);
                echo "<p>Generated number: $number</p>";

                if ($number % 2 == 0) {
                    echo "<p>The number $number is even.</p>";
                } else {
                    echo "<p>The number $number is odd.</p>";
                }
                switch ($number) {
                    case 2:
                    case 4:
                    case 6:
                    case 8:
                    case 10:
                        echo "<p>The number $number is even.</p>";
                        break;
                    default:
                        echo "<p>The number $number is odd.</p>";
                        break;
                }
            }

            if (isset($_POST['check_parity_10'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>7. Programul ce afiseaza un calificativ in functie de nota unui student. Nota va fi setata in variabila: 1-4 insuficient; 5-6 suficient;7-8 bine; 9-10 foarte bine(bursier)</h2>
        <form method="post">
            <button type="submit" name="check_grade" class="aurora-button">Check Grade</button>
        </form>
        <?php
            if (isset($_POST['check_grade'])) {

                $grade = rand(1, 10);
                echo "<p>Generated grade: $grade</p>";

                if ($grade >= 1 && $grade <= 4) {
                    echo "<p>Calificativ: Insuficient</p>";
                } elseif ($grade >= 5 && $grade <= 6) {
                    echo "<p>Calificativ: Suficient</p>";
                } elseif ($grade >= 7 && $grade <= 8) {
                    echo "<p>Calificativ: Bine</p>";
                } elseif ($grade == 9 || $grade == 10) {
                    echo "<p>Calificativ: Foarte bine (bursier)</p>";
                }
                switch ($grade) {
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                        echo "<p>Calificativ: Insuficient. Iar cu nota $grade studentul are restanta.</p>";
                        break;
                    case 5:
                    case 6:
                        echo "<p>Calificativ: Suficient. Studentul cu nota $grade a promovat, dar este rezultat mediuocru.</p>";
                        break;
                    case 7:
                    case 8:
                        echo "<p>Calificativ: Bine. Studentul cu nota $grade a promovat, rezultatul este unul bun, dar necesita imbunatatiri.</p>";
                        break;
                    case 9:
                    case 10:
                        echo "<p>Calificativ: Foarte bine (bursier). Studentul cu nota $grade a promovat cu brio si dovedeste ca stapaneste foarte bine materia.</p>";
                        break;
                    default:
                        echo "<p>Nota invalida.</p>";
                        break;
                }
            }

            if (isset($_POST['check_grade'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>8. Scrieti un program care va afisa "Azi este ziua! Va doresc o dimineata cat mai placuta in continuare". Unde ziua va fi o variabila care va contine ziua curenta (ex: Luni, Marti, Miercuri, Joi etc.).</h2>
        <form method="post">
            <button type="submit" name="display_day_message" class="aurora-button">Display Day Message</button>
        </form>
        <?php
            if (isset($_POST['display_day_message'])) {

                $days = ['Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata', 'Duminica'];
                $current_day = $days[array_rand($days)];
                echo "<p>Azi este $current_day! Va doresc o dimineata cat mai placuta in continuare.</p>";
                switch (array_search($current_day, $days)) {
                    case 0:
                        echo "<p>Azi este Luni! Va doresc o dimineata si o saptamana cat mai placute in continuare.</p>";
                        break;
                    case 1:
                        echo "<p>Azi este Marti! Va doresc o dimineata cat mai placuta in continuare, ati intrat in paine.</p>";
                        break;
                    case 2:
                        echo "<p>Azi este Miercuri! Va doresc o dimineata si o saptamana cat mai usoare si placute in continuare.</p>";
                        break;
                    case 3:
                        echo "<p>Azi este Joi! Va doresc o dimineata cat mai placuta in continuare. Mai este doar o zi pana la sfarsitul de saptamana</p>";
                        break;
                    case 4:
                        echo "<p>Azi este Vineri! Va doresc o dimineata cat mai placuta in continuare. Urmeaza o seara foate grozava si de neuitat.</p>";
                        break;
                    case 5:
                        echo "<p>Azi este Sambata! Va doresc o dimineata si un sfarsit de saptamana cat mai placute in continuare. Urmeaza o zi de relaxare si odihna.</p>";
                        break;
                    case 6:
                        echo "<p>Azi este Duminica! Va doresc o dimineata cat mai placuta in continuare. Sper sa aveti o zi de odihna si relaxare bine-meritata.</p>";
                        break;
                }
            }

            if (isset($_POST['display_day_message'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>9. Numar par sau impar maxim.</h2>
        <form method="post">
            <button type="submit" name="check_parity_max" class="aurora-button">Check Parity Max</button>
        </form>
        <?php
            if (isset($_POST['check_parity_max'])) {

                $number = rand(1, 1000);
                $a = rand(1, 1000);
                $b = rand(1, 1000);
                echo "<p>Generated number: $number</p>";
                echo "<p>Generated number a: $a</p>";
                echo "<p>Generated number b: $b</p>";
                if ($number % 2 === 0) {
                    echo "<p>The number $number is even.</p>";
                } else {
                    echo "<p>The number $number is odd.</p>";
                }

                print ($a > $b) ? "<p>Maxim even number: $a" : "Maxim odd number: $b</p>";
                if(($number + $a) >  ($number + $b)) {
                    print ($number % 2 === 0) ? "<p>Maxim even number close to the number $a: $number</p>" : "<p>Maxim odd number close to the number $a: $number</p>";
                } else {
                    print ($number % 2 === 0) ? "<p>Maxim even number close to the number $b: $number</p>" : "<p>Maxim odd number close to the number $b: $number</p>";
                }
                
            }

            if (isset($_POST['check_parity_max'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>10. Sa se determine daca un utilizator este logat pe site.</h2>
        <form method="post">
            <button type="submit" name="check_user_login" class="aurora-button">Check User Login</button>
        </form>
        <?php
            if (isset($_POST['check_user_login'])) {

                // Simulating user login status
                $is_logged_in = rand(0, 1) ? true : false;

                if ($is_logged_in) {
                    echo "<p>The user is logged in...</p>";
                    $user = null ?? 'visitor';
                    echo "<p>Welcome, $user!</p>";
                    echo "<p>Your last login was on " . date("Y-m-d H:i:s") . "</p>";
                } else {
                    echo "<p>The user is not logged in!</p>";
                }
            }

            if (isset($_POST['check_user_login'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>11. Folosind cele 3 structuri repetitive: while, do while, for, sa se afisseze primele 15 numere</h2>
        <form method="post">
            <button type="submit" name="display_first_15_numbers" class="aurora-button">Display First 15 Numbers</button>
        </form>
        <?php
            if (isset($_POST['display_first_15_numbers'])) {

                echo "<h3>Using for loop:</h3>";
                echo "<p>";
                for ($i = 1; $i <= 15; $i++) {
                    echo $i . " ";
                }
                echo "</p>";

                echo "<h3>Using while loop:</h3>";
                echo "<p>";
                $i = 1;
                while ($i <= 15) {
                    echo $i . " ";
                    $i++;
                }
                echo "</p>";

                echo "<h3>Using do-while loop:</h3>";
                echo "<p>";
                $i = 1;
                do {
                    echo $i . " ";
                    $i++;
                } while ($i <= 15);
                echo "</p>";
            }

            if (isset($_POST['display_first_15_numbers'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }  
        ?>
        
        <h2>12.a) Folosind continue si o structura repetitiva saa se afiseza doar numere impare pana la 15.</h2>
        <form method="post">
            <button type="submit" name="display_odd_numbers_up_to_15" class="aurora-button">Display Odd Numbers Up to 15</button>
        </form>
        <?php
            if (isset($_POST['display_odd_numbers_up_to_15'])) {

                echo "<h3>Using for loop:</h3>";
                echo "<p>";
                for ($i = 1; $i <= 15; $i++) {
                    if ($i % 2 == 0) {
                        continue;
                    }
                    echo $i . " ";
                }
                echo "</p>";

                echo "<h3>Using while loop:</h3>";
                echo "<p>";
                $i = 1;
                while ($i <= 15) {
                    if ($i % 2 == 0) {
                        $i++;
                        continue;
                    }
                    echo $i . " ";
                    $i++;
                }
                echo "</p>";

                echo "<h3>Using do-while loop:</h3>";
                echo "<p>";
                $i = 1;
                do {
                    if ($i % 2 == 0) {
                        $i++;
                        continue;
                    }
                    echo $i . " ";
                    $i++;
                } while ($i <= 15);
                echo "</p>";
            }

            if (isset($_POST['display_odd_numbers_up_to_15'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>12.b) Folosind break si o structura repetitiva sa se afiseze numerele pana la 15.</h2>
        <form method="post">
            <button type="submit" name="display_numbers_with_break" class="aurora-button">Display Numbers with Break</button>
        </form>
        <?php
            if (isset($_POST['display_numbers_with_break'])) {

                echo "<h3>Using for loop:</h3>";
                echo "<p>";
                for ($i = 1; $i <= 15; $i++) {
                    if ($i > 10) {
                        break;
                    }
                    echo $i . " ";
                }
                echo "</p>";

                echo "<h3>Using while loop:</h3>";
                echo "<p>";
                $i = 1;
                while ($i <= 15) {
                    if ($i > 10) {
                        break;
                    }
                    echo $i . " ";
                    $i++;
                }
                echo "</p>";

                echo "<h3>Using do-while loop:</h3>";
                echo "<p>";
                $i = 1;
                do {
                    if ($i > 10) {
                        break;
                    }
                    echo $i . " ";
                    $i++;
                } while ($i <= 15);
                echo "</p>";
            }

            if (isset($_POST['display_numbers_with_break'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>13. Sa se programeze un senzor care determina cantitatea de combustibil dintr-un rezervor si afiseaza un mesaj corespunzator. Daca cantitatea de combustibil scade sub 10 litri sa afiseze un mesaj de avertizare cu portocaliu: "Va rog sa alimentati.". Daca cantitatea de combustibil este 1 sa se afiseze mesajul "Ati ramas fara combustibil. Trebuie sa ne oprim."</h2>
        <form method="post">
            <button type="submit" name="check_fuel_level" class="aurora-button">Check Fuel Level</button>
        </form>
        <?php
            if (isset($_POST['check_fuel_level'])) {

                $maximum_fuel = 50; // Maximum fuel capacity in liters
                $fuel_level = rand(0, $maximum_fuel); // Fuel level in liters
                echo "<p>Current fuel level: $fuel_level liters</p>";

                if ($fuel_level < 1) {
                    $background_color = "linear-gradient(90deg, black, darkred, red);";
                    echo "<p style='color: red;'>You're out of fuel. We have to stop.</p>";
                    echo "<audio autoplay loop>
                        <source src='decizii_sound/fuel_alert.mp3' type='audio/mpeg'>
                        Your browser does not support the audio element.
                    </audio>
                    <iframe id='iframeAudio' src='decizii_sound/fuel_alert.mp3' style='display:none' allow='autoplay' width='0' height='0' frameborder='0'></iframe>";
                    echo "<p style='color: red;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: red;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: red;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                } elseif ($fuel_level < 10) {
                    $background_color = "linear-gradient(90deg, red, darkorange, orange);";
                    echo "<p style='color: orange;'>Insufficient fuel quantity. Please refuel.</p>";
                    echo "<p style='color: orange;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: orange;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: orange;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                } elseif ($fuel_level <= $maximum_fuel * 0.25) {
                    $background_color = "linear-gradient(90deg, red, orange, yellow);";
                    echo "<p style='color: yellow;'>The fuel level is sufficient.</p>";
                    echo "<p style='color: yellow;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: yellow;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: yellow;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                }
                elseif ($fuel_level <= $maximum_fuel * 0.5) {
                    $background_color = "linear-gradient(90deg, red, orange, yellow, lightgreen);";
                    echo "<p style='color: lightgreen;'>The fuel level is good.</p>";
                    echo "<p style='color: lightgreen;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: lightgreen;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: lightgreen;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                }
                elseif ($fuel_level <= $maximum_fuel * 0.75) {
                    $background_color = "linear-gradient(90deg, red, orange, yellow, lightgreen, green);";
                    echo "<p style='color: green;'>The fuel level is optimal.</p>";
                    echo "<p style='color: green;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: green;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: green;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                }
                elseif ($fuel_level <= $maximum_fuel * 0.95) {
                    $background_color = "linear-gradient(90deg, red, orange, yellow, lightgreen, green, darkgreen);";
                    echo "<p style='color: darkgreen;'>Atention! The fuel level is almost completely full.</p>";
                    echo "<p style='color: darkgreen;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: darkgreen;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: darkgreen;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                }
                else {
                    $background_color = "linear-gradient(90deg, red, orange, yellow, lightgreen, green, darkgreen, blue);";
                    echo "<p style='color: blue;'>Risk! The fuel level is overflowing.</p>";
                    echo "<p style='color: blue;'>Maximum fuel capacity: $maximum_fuel liters</p>";  
                    echo "<p style='color: blue;'>Fuel level percentage: " . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</p>";
                    echo "<p style='color: blue;'>Fuel level status: " . ($fuel_level / $maximum_fuel * 100 >= 50 ? 'Sufficient' : 'Insufficient') . "</p>"; 
                }

                echo "<style>
                    @keyframes flash {
                        0% { background-color: red; }
                        50% { background-color: white; }
                        100% { background-color: red; }
                    }
                    .flash {
                        animation: flash 3s infinite;
                    }";
                if ($fuel_level < 1) {
                    echo ".flash { animation: flash 0.5s infinite; }";
                } 
                echo "</style>";

                echo "<div class='aurora-input'>
                        <div style='width:" . ($fuel_level / $maximum_fuel * 100) . "%;
                            color:#191919;
                            font-weight:bolder;
                            height:20px;
                            background:{$background_color};
                            border-radius:10px;
                            " . ($fuel_level < 10 ? "animation: flash 5s infinite;" : "") . ">
                        </div>
        
                        <div style='position:absolute; top:5px; left:50%; transform:translateX(-50%); font-weight:bold; color:#000;'>" . round(($fuel_level / $maximum_fuel) * 100, 2) . "%</div>
                    </div>";
            }

            if (isset($_POST['check_fuel_level'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>14. Sa se sorteze crescator un sir de numere</h2>
        <form method="post">
            <button type="submit" name="sort_numbers" class="aurora-button">Sort Numbers</button>
        </form>
        <?php
            if (isset($_POST['sort_numbers'])) {

                // Generate an array of 20 random numbers between 1 and 200
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";

                // Sort the array in ascending order
                sort($numbers);
                echo "<p>Sorted numbers (ascending) using sort(): " . implode(", ", $numbers) . "</p>";

                // Sort the array in descending order
                rsort($numbers);
                echo "<p>Sorted numbers (descending) using rsort(): " . implode(", ", $numbers) . "</p>";

                // Custom sorting using usort
                usort($numbers, function($a, $b) {
                    return $a - $b;
                });
                echo "<p>Sorted numbers (ascending) using usort(): " . implode(", ", $numbers) . "</p>";    

                // Custom sorting in descending order using usort
                usort($numbers, function($a, $b) {
                    return $b - $a;
                });
                echo "<p>Sorted numbers (descending) using usort(): " . implode(", ", $numbers) . "</p>";  

                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";

                // Bubble sort in ascending order using nested loops
                for ($i = 0; $i < count($numbers) - 1; $i++) {
                    for ($j = 0; $j < count($numbers) - $i - 1; $j++) {
                        if ($numbers[$j] > $numbers[$j + 1]) {
                            // Swap
                            $temp = $numbers[$j];
                            $numbers[$j] = $numbers[$j + 1];
                            $numbers[$j + 1] = $temp;
                        }
                    }
                }
                echo "<p>Sorted numbers (ascending) using Bubble Sort: " . implode(", ", $numbers) . "</p>";
                
                // Bubble sort in descending order using nested loops
                for ($i = 0; $i < count($numbers) - 1; $i++) {
                    for ($j = 0; $j < count($numbers) - $i - 1; $j++) {
                        if ($numbers[$j] < $numbers[$j + 1]) {
                            // Swap
                            $temp = $numbers[$j];
                            $numbers[$j] = $numbers[$j + 1];
                            $numbers[$j + 1] = $temp;
                        }
                    }
                }
                echo "<p>Sorted numbers (descending) using Bubble Sort: " . implode(", ", $numbers) . "</p>";   

                // Insertion sort in ascending order
                for ($i = 1; $i < count($numbers); $i++) {
                    $key = $numbers[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $numbers[$j] > $key) {
                        $numbers[$j + 1] = $numbers[$j];
                        $j--;
                    }
                    $numbers[$j + 1] = $key;
                }
                echo "<p>Sorted numbers (ascending) using Insertion Sort: " . implode(", ", $numbers) . "</p>";
                
                // Insertion sort in descending order
                for ($i = 1; $i < count($numbers); $i++) {
                    $key = $numbers[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $numbers[$j] < $key) {
                        $numbers[$j + 1] = $numbers[$j];
                        $j--;
                    }
                    $numbers[$j + 1] = $key;
                }
                echo "<p>Sorted numbers (descending) using Insertion Sort: " . implode(", ", $numbers) . "</p>";
            
                // Selection sort in ascending order
                for ($i = 0; $i < count($numbers) - 1; $i++) {
                    $min_index = $i;
                    for ($j = $i + 1; $j < count($numbers); $j++) {
                        if ($numbers[$j] < $numbers[$min_index]) {
                            $min_index = $j;
                        }
                    }
                    // Swap
                    $temp = $numbers[$i];
                    $numbers[$i] = $numbers[$min_index];
                    $numbers[$min_index] = $temp;
                }
                echo "<p>Sorted numbers (ascending) using Selection Sort: " . implode(", ", $numbers) . "</p>";
                
                // Selection sort in descending order
                for ($i = 0; $i < count($numbers) - 1; $i++) {
                    $max_index = $i;
                    for ($j = $i + 1; $j < count($numbers); $j++) {
                        if ($numbers[$j] > $numbers[$max_index]) {
                            $max_index = $j;
                        }
                    }
                    // Swap
                    $temp = $numbers[$i];
                    $numbers[$i] = $numbers[$max_index];
                    $numbers[$max_index] = $temp;
                }
                echo "<p>Sorted numbers (descending) using Selection Sort: " . implode(", ", $numbers) . "</p>";
                
                // Generate a new array of random numbers for merge sort
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                
                // Merge sort function
                function merge_sort($array) {
                    if (count($array) <= 1) {
                        return $array;
                    }
                    $mid = floor(count($array) / 2);
                    $left = array_slice($array, 0, $mid);
                    $right = array_slice($array, $mid);
                    return merge(merge_sort($left), merge_sort($right));
                }
                function merge($left, $right) {
                    $result = [];
                    while (count($left) > 0 && count($right) > 0) {
                        if ($left[0] <= $right[0]) {
                            $result[] = array_shift($left);
                        } else {
                            $result[] = array_shift($right);
                        }
                    }
                    return array_merge($result, $left, $right);
                }
                $sorted_numbers = merge_sort($numbers);
                echo "<p>Sorted numbers (ascending) using Merge Sort: " . implode(", ", $sorted_numbers) . "</p>";

                // Merge sort in descending order
                function merge_sort_desc($array) {
                    if (count($array) <= 1) {
                        return $array;
                    }
                    $mid = floor(count($array) / 2);
                    $left = array_slice($array, 0, $mid);
                    $right = array_slice($array, $mid);
                    return merge_desc(merge_sort_desc($left), merge_sort_desc($right));
                }
                function merge_desc($left, $right) {
                    $result = [];
                    while (count($left) > 0 && count($right) > 0) {
                        if ($left[0] >= $right[0]) {
                            $result[] = array_shift($left);
                        } else {
                            $result[] = array_shift($right);
                        }
                    }
                    return array_merge($result, $left, $right);
                }

                $sorted_numbers_desc = merge_sort_desc($numbers);
                echo "<p>Sorted numbers (descending) using Merge Sort: " . implode(", ", $sorted_numbers_desc) . "</p>";
                
                // Generate a new array of random numbers for quick sort
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                
                // Quick sort function
                function quick_sort($array) {
                    if (count($array) <= 1) {
                        return $array;
                    }
                    $pivot = $array[0];
                    $left = [];
                    $right = [];
                    for ($i = 1; $i < count($array); $i++) {
                        if ($array[$i] <= $pivot) {
                            $left[] = $array[$i];
                        } else {
                            $right[] = $array[$i];
                        }
                    }
                    return array_merge(quick_sort($left), [$pivot], quick_sort($right));
                }   
                $sorted_numbers_quick = quick_sort($numbers);
                echo "<p>Sorted numbers (ascending) using Quick Sort: " . implode(", ", $sorted_numbers_quick) . "</p>";
                
                // Quick sort in descending order
                function quick_sort_desc($array) {
                    if (count($array) <= 1) {
                        return $array;
                    }
                    $pivot = $array[0];
                    $left = [];
                    $right = [];
                    for ($i = 1; $i < count($array); $i++) {
                        if ($array[$i] >= $pivot) {
                            $left[] = $array[$i];
                        } else {
                            $right[] = $array[$i];
                        }
                    }
                    return array_merge(quick_sort_desc($left), [$pivot], quick_sort_desc($right));
                }
                $sorted_numbers_quick_desc = quick_sort_desc($numbers);
                echo "<p>Sorted numbers (descending) using Quick Sort: " . implode(", ", $sorted_numbers_quick_desc) . "</p>";

                // Using array_multisort to sort in ascending order
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $numbers_copy = $numbers;
                array_multisort($numbers_copy, SORT_ASC, $numbers);
                echo "<p>Sorted numbers (ascending) using array_multisort(): " . implode(", ", $numbers) . "</p>";
                
                // Using array_multisort to sort in descending order
                $numbers_copy = $numbers;
                array_multisort($numbers_copy, SORT_DESC, $numbers);
                echo "<p>Sorted numbers (descending) using array_multisort(): " . implode(", ", $numbers) . "</p>";
                
                // Using array_map with sort
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $sorted_numbers_map = array_map(null, $numbers);
                sort($sorted_numbers_map);
                echo "<p>Sorted numbers (ascending) using array_map with sort(): " . implode(", ", $sorted_numbers_map) . "</p>";
                rsort($sorted_numbers_map);
                echo "<p>Sorted numbers (descending) using array_map with rsort(): " . implode(", ", $sorted_numbers_map) . "</p>";
        
                // Using array_reduce to sort in ascending order
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $sorted_numbers_reduce = array_reduce($numbers, function($carry, $item) {
                    $carry[] = $item;
                    sort($carry);
                    return $carry;
                }, []);
                echo "<p>Sorted numbers (ascending) using array_reduce(): " . implode(", ", $sorted_numbers_reduce) . "</p>";
                
                rsort($sorted_numbers_reduce);

                echo "<p>Sorted numbers (descending) using array_reduce(): " . implode(", ", $sorted_numbers_reduce) . "</p>";

                // Using array_filter to sort in ascending order
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $sorted_numbers_filter = array_filter($numbers, function($item) {
                    return true; // Just return all items
                });
                sort($sorted_numbers_filter);
                echo "<p>Sorted numbers (ascending) using array_filter(): " . implode(", ", $sorted_numbers_filter) . "</p>";
                rsort($sorted_numbers_filter);
                echo "<p>Sorted numbers (descending) using array_filter(): " . implode(", ", $sorted_numbers_filter) . "</p>";
                
                // Using array_slice to sort in ascending order
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $numbers_slice = array_slice($numbers, 0);
                sort($numbers_slice);
                echo "<p>Sorted numbers (ascending) using array_slice(): " . implode(", ",$numbers_slice) . "</p>";
                rsort($numbers_slice);
                echo "<p>Sorted numbers (descending) using array_slice(): " . implode(", ", $numbers_slice) . "</p>";

                //Using do while to sort in ascending order
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $n = count($numbers);
                $i = 0;
                do {
                    $j = 0;
                    do {
                        if ($numbers[$j] > $numbers[$j + 1]) {
                            // Swap
                            $temp = $numbers[$j];
                            $numbers[$j] = $numbers[$j + 1];
                            $numbers[$j + 1] = $temp;
                        }
                        $j++;
                    } while ($j < $n - $i - 1);
                    $i++;
                } while ($i < $n - 1);
                echo "<p>Sorted numbers (ascending) using do-while Bubble Sort: " . implode(", ", $numbers) . "</p>";
                //Using do while to sort in descending order
                $n = count($numbers);
                $i = 0;
                do {
                    $j = 0;
                    do {
                        if ($numbers[$j] < $numbers[$j + 1]) {
                            // Swap
                            $temp = $numbers[$j];
                            $numbers[$j] = $numbers[$j + 1];
                            $numbers[$j + 1] = $temp;
                        }
                        $j++;
                    } while ($j < $n - $i - 1);
                    $i++;
                } while ($i < $n - 1);
                echo "<p>Sorted numbers (descending) using do-while Bubble Sort: " . implode(", ", $numbers) . "</p>";

                //Using while to sort in ascending order
                $numbers = [];
                for ($i = 0; $i < 20; $i++) {
                    $numbers[] = rand(1, 200);
                }
                echo "<p>Generated numbers: " . implode(", ", $numbers) . "</p>";
                $n = count($numbers);
                $i = 0;
                while ($i < $n - 1) {
                    $j = 0;
                    while ($j < $n - $i - 1) {
                        if ($numbers[$j] > $numbers[$j + 1]) {
                            // Swap
                            $temp = $numbers[$j];
                            $numbers[$j] = $numbers[$j + 1];
                            $numbers[$j + 1] = $temp;
                        }
                        $j++;
                    }
                    $i++;
                }
                echo "<p>Sorted numbers (ascending) using while Bubble Sort: " . implode(", ", $numbers) . "</p>";
                //Using while to sort in descending order
                $n = count($numbers);
                $i = 0;
                while ($i < $n - 1) {
                    $j = 0;
                    while ($j < $n - $i - 1) {
                        if ($numbers[$j] < $numbers[$j + 1]) {
                            // Swap
                            $temp = $numbers[$j];
                            $numbers[$j] = $numbers[$j + 1];
                            $numbers[$j + 1] = $temp;
                        }
                        $j++;
                    }
                    $i++;
                }
                echo "<p>Sorted numbers (descending) using while Bubble Sort: " . implode(", ", $numbers) . "</p>";
            }

            if (isset($_POST['sort_numbers'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>15. Sa se interschimbe continutul a doua variabile</h2>
        <form method="post">
            <button type="submit" name="swap_variables" class="aurora-button">Swap Variables</button>
        </form>

        <?php
            if (isset($_POST['swap_variables'])) {

                $a = rand(1, 100);
                $b = rand(1, 100);
                echo "<p>Before swapping: a = $a, b = $b</p>";

                // Swapping using a temporary variable
                $temp = $a;
                $a = $b;
                $b = $temp;
                echo "<p>After swapping using temporary variable: a = $a, b = $b</p>";

                // Swapping without using a temporary variable
                $a = $a + $b;
                $b = $a - $b;
                $a = $a - $b;
                echo "<p>After swapping without using temporary variable: a = $a, b = $b</p>";

                // Swapping using list() function
                list($a, $b) = array($b, $a);
                echo "<p>After swapping using list() function: a = $a, b = $b</p>";

                // Swapping using XOR bitwise operator
                $a = $a ^ $b;
                $b = $a ^ $b;
                $a = $a ^ $b;
                echo "<p>After swapping using XOR bitwise operator: a = $a, b = $b</p>";

                // Swapping using array destructuring (PHP 7.1+)
                [$a, $b] = [$b, $a];
                echo "<p>After swapping using array destructuring: a = $a, b = $b</p>";

                // Swapping using multiplication and division
                if ($b != 0) { // Avoid division by zero
                    $a = $a * $b;
                    $b = $a / $b;
                    $a = $a / $b;
                    echo "<p>After swapping using multiplication and division: a = $a, b = $b</p>";
                } else {
                    echo "<p>Cannot swap using multiplication and division as b is zero.</p>";
                }

                // Swapping using array functions
                $arr = [$a, $b];
                $arr = array_reverse($arr);
                $a = $arr[0];
                $b = $arr[1];
                echo "<p>After swapping using array functions: a = $a, b = $b</p>";

                // Swapping using references
                function swap_by_reference(&$x, &$y) {
                    $temp = $x;
                    $x = $y;
                    $y = $temp;
                }
                swap_by_reference($a, $b);
                echo "<p>After swapping using references: a = $a, b = $b</p>";

                // Swapping using eval() function
                eval('$temp = $a; $a = $b; $b = $temp;');
                echo "<p>After swapping using eval() function: a = $a, b = $b</p>";

                // Swapping using array_map
                list($a, $b) = array_map(null, [$b, $a]);   
                echo "<p>After swapping using array_map: a = $a, b = $b</p>";
            }

            if (isset($_POST['swap_variables'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>16.a Dorel doreste sa cumpere 2 produse online. Insa fiecare dintre cele 2 produse sunt in doua variante de pret (2 magazine diferite). Cunoscandu-se cele 2 preturi pentru fiecare prosus, sa se afiseze cat ar economisi Ionel, daca ar cumpara produsele cele mai ieftine.</h2>
        <form method="post">
            <button type="submit" name="calculate_savings" class="aurora-button">Calculate Savings</button>
        </form>
        <?php
            if (isset($_POST['calculate_savings'])) {

                // Generate random prices for the two products in two different stores
                $product1_store1 = rand(50, 2000);
                $product1_store2 = rand(50, 2000);
                $product2_store1 = rand(50, 2000);
                $product2_store2 = rand(50, 2000);

                echo "<p>Product 1 prices: Store 1 = $product1_store1 $, Store 2 = $product1_store2 $</p>";
                echo "<p>Product 2 prices: Store 1 = $product2_store1 $, Store 2 = $product2_store2 $</p>";

                // Determine the cheapest prices for each product
                $cheapest_product1 = min($product1_store1, $product1_store2);
                $cheapest_product2 = min($product2_store1, $product2_store2);
                echo "<p>Cheapest price for Product 1: " . number_format($cheapest_product1, 2) . " $</p>";
                echo "<p>Cheapest price for Product 2: " . number_format($cheapest_product2, 2) . " $</p>";

                // Calculate total cost when buying from cheapest options
                $total_cheapest = $cheapest_product1 + $cheapest_product2;

                // Calculate total cost when buying from most expensive options
                $most_expensive_product1 = max($product1_store1, $product1_store2);
                $most_expensive_product2 = max($product2_store1, $product2_store2);
                $total_most_expensive = $most_expensive_product1 + $most_expensive_product2;

                // Calculate savings
                $savings = $total_most_expensive - $total_cheapest;

                echo "<p>Total cost when buying cheapest options: " . number_format($total_cheapest, 2) . "$</p>";
                echo "<p>Total cost when buying most expensive options: " . number_format($total_most_expensive, 2) . "$</p>";
                echo "<p>Ionel would save: " . number_format($savings, 2) . "$ by buying the cheapest options.</p>";
            }

            if (isset($_POST['calculate_savings'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
            ?>
            <h2>16.b Determinarea minimulul a mai multor produse aflate in magazine diferite. Economia rezultata precum si media pretului produsului.</h2>
        <form method="post">
            <button type="submit" name="calculate_multiple_savings" class="aurora-button">Calculate Multiple Savings</button>
        </form>
        <?php
            if (isset($_POST['calculate_multiple_savings'])) {

                $num_products = rand(1, 100); // Random number of products between 1 and 100
                $total_cheapest = 0;
                $total_most_expensive = 0;

                echo "<p>Number of products: $num_products</p>";

                for ($i = 1; $i <= $num_products; $i++) {
                    // Generate random prices for each product in two different stores
                    $price_store1 = rand(50, 2000);
                    $price_store2 = rand(50, 2000);
                    $price_store3 = rand(50, 2000);
                    $price_store4 = rand(50, 2000);

                    echo "<p>Product $i prices: Store 1 = $price_store1 $, Store 2 = $price_store2 $, Store 3 = $price_store3 $, Store 4 = $price_store4 $</p>";

                    // Determine the cheapest and most expensive prices for each product
                    $cheapest_price = min($price_store1, $price_store2, $price_store3, $price_store4);
                    $most_expensive = max($price_store1, $price_store2, $price_store3, $price_store4);

                    // Accumulate totals
                    $total_cheapest += $cheapest_price;
                    $total_most_expensive += $most_expensive_price;
                }

                // Calculate savings
                $savings = $total_most_expensive - $total_cheapest;

                // Calculate average price of the cheapest products
                $average_price = $total_cheapest / $num_products;

                echo "<p>Total cost when buying cheapest options: " . number_format($total_cheapest, 2) . "$</p>";
                echo "<p>Total cost when buying most expensive options: " . number_format($total_most_expensive, 2) . "$</p>";
                echo "<p>Ionel would save: " . number_format($savings, 2) . "$ by buying the cheapest options.</p>";
                echo "<p>Average price of the cheapest products: " . number_format($average_price, 2) . "$</p>";
            }

            if (isset($_POST['calculate_multiple_savings'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>17. 100 de sportivi, cu numere de concurs consecutive de la 1 la 100, participaa la un concurs de incot.Distribuiti automat cate 6 sportivi, in echipe, astfel incat echipa incompleta va inota ultima.</h2>
        <form method="post">
            <button type="submit" name="distribute_teams" class="aurora-button">Distribute Teams</button>
        </form>
        <?php
            if (isset($_POST['distribute_teams'])) {

                $num_sportivi = 100;
                $team_size = 6;
                $teams = [];
                $current_team = [];

                for ($i = 1; $i <= $num_sportivi; $i++) {
                    $current_team[] = $i;

                    if (count($current_team) == $team_size) {
                        $teams[] = $current_team;
                        $current_team = [];
                    }
                }

                // Add remaining sportivi to the last team if any
                if (count($current_team) > 0) {
                    $teams[] = $current_team;
                }

                // Display teams
                foreach ($teams as $index => $team) {
                    echo "<p>Team " . ($index + 1) . ": " . implode(", ", $team) . "</p>";
                }
            }

            if (isset($_POST['distribute_teams'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }    
        ?>
        
        <h2>21. Sa se verifice daca un numar generat cu functia rand(1, 100) este par sau impar.</h2>
        <form method="post">
            <button type="submit" name="check_parity_100" class="aurora-button">Check Parity (1-100)</button>
        </form>
        <?php
            if (isset($_POST['check_parity_100'])) {

                $number = rand(1, 100);
                echo "<p>Generated number: $number</p>";

                if ($number % 2 == 0) {
                    echo "<p>The number $number is even.</p>";
                } else {
                    echo "<p>The number $number is odd.</p>";
                }

            }

            if (isset($_POST['check_parity_100'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>22. Sa se verifice daca un numar generat cu functia rand(1, 100) este mai mare decat 10 si mai mic decat 50.</h2>
        <form method="post">
            <button type="submit" name="check_range_10_50" class="aurora-button">Check Range (10-50)</button>
        </form>
        <?php
            if (isset($_POST['check_range_10_50'])) {

                $number = rand(1, 100);
                echo "<p>Generated number: $number</p>";

                if ($number > 10 && $number < 50) {
                    echo "<p>The number $number is greater than 10 and less than 50.</p>";
                } else {
                    echo "<p>The number $number is not in the range (10, 50).</p>";
                }
            }

            if (isset($_POST['check_range_10_50'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }   
        ?>
        <h2>23. Sa se verifice daca un numar generat cu functia rand(1, 100) este divizibil cu 4 sau cu 6.</h2>
        <form method="post">
            <button type="submit" name="check_divisibility_4_6" class="aurora-button">Check Divisibility (4 or 6)</button>
        </form>
        <?php
            if (isset($_POST['check_divisibility_4_6'])) {

                $number = rand(1, 100);
                echo "<p>Generated number: $number</p>";

                if ($number % 4 == 0 || $number % 6 == 0) {
                    echo "<p>The number $number is divisible by either 4 or 6.</p>";
                } else {
                    echo "<p>The number $number is not divisible by either 4 or 6.</p>";
                }
            }

            if (isset($_POST['check_divisibility_4_6'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            } 
        ?>

        <h2>24. Sa se verifice daca un numar generat cu functia rand(1, 100) este divizibil cu 3 si 5.</h2>
        <form method="post">
            <button type="submit" name="check_divisibility" class="aurora-button">Check Divisibility</button>
        </form>
        <?php
            if (isset($_POST['check_divisibility'])) {

                $number = rand(1, 100);
                echo "<p>Generated number: $number</p>";

                if ($number % 3 == 0 && $number % 5 == 0) {
                    echo "<p>The number $number is divisible by both 3 and 5.</p>";
                } else {
                    echo "<p>The number $number is not divisible by both 3 and 5.</p>";
                }
            }

            if (isset($_POST['check_divisibility'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }   
        ?>

        <h2>25. Sa se verifice daca un numar generat cu functia rand(1, 100) este pozitiv, negativ sau zero.</h2>
        <form method="post">
            <button type="submit" name="check_sign" class="aurora-button">Check Sign</button>
        </form>
        <?php

            if (isset($_POST['check_sign'])) {

                $number = rand(-100, 100);
                echo "<p>Generated number: $number</p>";

                if ($number > 0) {
                    echo "<p>The number $number is positive.</p>";
                } elseif ($number < 0) {
                    echo "<p>The number $number is negative.</p>";
                } else {
                    echo "<p>The number is zero.</p>";
                }
            }

            if (isset($_POST['check_sign'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
            ?>

            <h2>26. Scrieti un algoritm care sa determine maximul dintre trei numere.</h2>
            <form method="post">
                <button type="submit" name="find_max_of_three" class="aurora-button">Find Max of Three</button>
            </form>
            <?php
                if (isset($_POST['find_max_of_three'])) {

                    $num1 = rand(1, 100);
                    $num2 = rand(1, 100);
                    $num3 = rand(1, 100);
                    echo "<p>Generated numbers: $num1, $num2, and $num3</p>";

                    if ($num1 >= $num2 && $num1 >= $num3) {
                        echo "<p>The maximum number is $num1.</p>";
                    } elseif ($num2 >= $num1 && $num2 >= $num3) {
                        echo "<p>The maximum number is $num2.</p>";
                    } else {
                        echo "<p>The maximum number is $num3.</p>";
                    }
                }

                if (isset($_POST['find_max_of_three'])) {
                    echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
                }
            ?>
        <h2>27. Scrieti un algoritm care sa determine minimul dintre doua numere.</h2>
        <form method="post">
            <button type="submit" name="find_min" class="aurora-button">Find Min</button>
        </form>
        <?php
            if (isset($_POST['find_min'])) {

                $num1 = rand(1, 100);
                $num2 = rand(1, 100);
                echo "<p>Generated numbers: $num1 and $num2</p>";

                if ($num1 < $num2) {
                    echo "<p>The minimum number is $num1.</p>";
                } elseif ($num2 < $num1) {
                    echo "<p>The minimum number is $num2.</p>";
                } else {
                    echo "<p>Both numbers are equal.</p>";
                }
            }

            if (isset($_POST['find_min'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>28. Sa se verifice daca un numar generat cu functia rand(1, 100) este pozitiv sau negativ.</h2>
        <form method="post">
            <button type="submit" name="check_positive_negative" class="aurora-button">Check Positive/Negative</button>
        </form>
        <?php
            if (isset($_POST['check_positive_negative'])) {

                $number = rand(-100, 100);
                echo "<p>Generated number: $number</p>";

                if ($number >= 0) {
                    echo "<p>The number $number is positive.</p>";
                } else {
                    echo "<p>The number $number is negative.</p>";
                }
            }

            if (isset($_POST['check_positive_negative'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        <h2>29. Sa se verifice daca un numar generat cu functia rand(1, 100) este mai mare decat 50.</h2>
        <form method="post">
            <button type="submit" name="check_greater_than_50" class="aurora-button">Check Greater Than 50</button>
        </form>
        <?php
            if (isset($_POST['check_greater_than_50'])) {

                $number = rand(1, 100);
                echo "<p>Generated number: $number</p>";

                if ($number > 50) {
                    echo "<p>The number $number is greater than 50.</p>";
                } else {
                    echo "<p>The number $number is not greater than 50.</p>";
                }
            }

            if (isset($_POST['check_greater_than_50'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }
        ?>
        
        <h2>30. Sa se verifice daca un numar generat cu functia rand(1, 100) este intre 20 si 80.</h2>
        <form method="post">
            <button type="submit" name="check_between_20_and_80" class="aurora-button">Check Between 20 and 80</button>
        </form>
        <?php
            if (isset($_POST['check_between_20_and_80'])) {

                $number = rand(1, 100);
                echo "<p>Generated number: $number</p>";

                if ($number >= 20 && $number <= 80) {
                    echo "<p>The number $number is between 20 and 80.</p>";
                } else {
                    echo "<p>The number $number is not between 20 and 80.</p>";
                }
            }

            if (isset($_POST['check_between_20_and_80'])) {
                echo '<a href="decizii.php" class="aurora-input">Try Again</a>';
            }   
        ?>
    </header>
    <main>
        <section class="image-side-content">
            <h2>About PHP Decision Making</h2>
            <p>Decision making in PHP is implemented using conditional statements such as if, else, and switch. These statements allow you to execute different blocks of code based on certain conditions.</p>
            <h3>Common Conditional Statements:</h3>
            <ul>
                <li><strong>if statement:</strong> Used to execute a block of code if a specified condition is true.</li>
                <li><strong>else statement:</strong> Used to execute a block of code if the condition in the if statement is false.</li>
                <li><strong>elseif statement:</strong> Used to specify a new condition to test if the previous condition was false.</li>
                <li><strong>switch statement:</strong> Used to perform different actions based on different conditions.</li>
            </ul>
            <p>These constructs are essential for controlling the flow of a PHP program and making decisions based on dynamic data.</p>
        </section>
    </main>
    <footer class="system-footer">
        <p>&copy; 2024 PHP Decision Making Exercises</p>
    </footer> 
    <script>
        window.addEventListener('scroll', () => {
            localStorage.setItem('scrollPosition', window.scrollY);
        });

        window.addEventListener('load', () => {
            const scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition, 10));
            }
        });
    </script>  
</body>
</html>