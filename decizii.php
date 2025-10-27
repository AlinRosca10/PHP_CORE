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