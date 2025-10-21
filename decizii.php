<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.2">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Decision Document</title>
    <link rel="icon" type="image/x-icon" href="decizii_icon/decision_icon.png">
    <link rel="stylesheet" href="decizii_style/style.css">
</head>
<body>
    <header class="aurora-input">
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