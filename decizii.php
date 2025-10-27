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
        <h2>9. Sa se verifice daca un numar generat cu functia rand(1, 100) este divizibil cu 3 si 5.</h2>
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

        <h2>10. Sa se verifice daca un numar generat cu functia rand(1, 100) este pozitiv, negativ sau zero.</h2>
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

            <h2>11. Scrieti un algoritm care sa determine maximul dintre trei numere.</h2>
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
        <h2>12. Scrieti un algoritm care sa determine minimul dintre doua numere.</h2>
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
        <h2>13. Sa se verifice daca un numar generat cu functia rand(1, 100) este pozitiv sau negativ.</h2>
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
        <h2>14. Sa se verifice daca un numar generat cu functia rand(1, 100) este mai mare decat 50.</h2>
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
        <h2>15. Sa se verifice daca un numar generat cu functia rand(1, 100) este intre 20 si 80.</h2>
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
</body>
</html>