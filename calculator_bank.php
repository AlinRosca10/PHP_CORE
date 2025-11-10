<?php 
    include 'calculator_bank_bnr.php'; 
?>
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
    <title>PHP Banking Document</title>
    <link rel="icon" type="image/x-icon" href="bank_icon/bank_icon.png">
    <link rel="stylesheet" href="bank_style/style_calculator.css">
</head>
<body>
    <header class="aurora-input aurora">
        <h1>PHP Bank Transaction</h1>
        <h2>A bank customer earns interest on his balance every year. 
            Display the balance for each year, if he leaves the money in the bank for numbers of years chosen. 
            Practical example: The client initially deposits 2500 RON and then 600 RON each month for 8 years. 
            From the second year, the balance is equal to the amount deposited + interest. 
            Input data: balance: 2500(initial submission), interest: 11% per year, number of years: 8. 
            Output data: amount in RON
            At the beginning there will be an interactive dynamic calculator. 
            An example will be presented at the end.
        </h2>
        <h2>Bank Interest Calculator (with BNR Exchange Rates)</h2>
        <p>Exchange rates last updated: 
            <strong>
                <?= 
                    $rate_date 
                ?>
            </strong>
        </p>
        <form id="calcForm" method="post">
            <fieldset class="aurora-input">Banking Simulation
                <legend class="aurora-label">
                    <label id="initial_submission_label" for="initial_submission_input" class="aurora-label">Initial submision:</label>
                    <input id="initial_submission_input" type="number" class="aurora-input" name="initial_submission" placeholder="2500" step="any" min="0" required/>

                    <label id="currency_label" for="currency_select" class="aurora-label">Currency:</label>
                    <select id="currency_select" class="aurora-select" name="currency">
                        <?php
                            foreach ($rates as $currency => $value):
                        ?>
                        <option value="<?= $currency ?>">
                            <?= 
                                $currency 
                            ?> (<?= number_format($value, 4) ?> RON)
                        </option>
                        <?php
                            endforeach; 
                        ?>
                    </select>

                </legend>
                <legend class="aurora-input">

                    <label id="monthly_deposit_label" class="aurora-label" for="monthly_deposit_input">Monthly deposit:</label>
                    <input id="monthly_deposit_input" type="number" class="aurora-input" name="monthly_deposit" placeholder="600" step="any" min="0" required/>

                </legend>
                <legend class="aurora-label">

                    <label id="interest_label" for="interest_input" class="aurora-label">Annual interest (%):</label>
                    <input id="interest_input" type="number" class="aurora-input" name="interest" placeholder="11" step="any" min="0" required/>

                    <label id="years_label" for="years_input" class="aurora-label">Number of years:</label>
                    <input id="years_input" type="number" class="aurora-input" name="years" placeholder="8" step="any" min="1" required>
                </legend>
                <legend>
                    <button type="submit" name="bank_interest" class="aurora-button">Bank interest after years</button>
                </legend>
            </fieldset>
        </form>
        <hr>
        <div id="result">
            <?= $result ?>
        </div>
        <?php
            if(isset($_POST['bank_interest'])) {
                $initial_submission = 2500;
                $numbers_years = 8;
                $interest = 0.11;
                $compounding_rate = 12;
                //dn - annual nominal interest;
                //d – interest per period
                //n - number of compounding periods
                //m - number of compounding periods/year
                //na – number of years

                $numbers_compounding = $numbers_years * $compounding_rate;

                $sold_only12 = $initial_submission * ((1 + $interest / $compounding_rate) ** ($numbers_years * $compounding_rate));
                echo "<p>The sold of the client's account $initial_submission RON initialy deposited over $numbers_years years
                at an annual interest rate of " . ($interest * 100) . "%,
                compounded monthly over $numbers_years years,
                with $numbers_compounding
                compounding periods is: " . number_format($sold_only12, 2) . " RON</p>";
                
                $sold_initial = $initial_submission * ((1 + $interest / $compounding_rate) ** ($numbers_years * $compounding_rate));
                $monthly_deposit = 600;
                $sold_monthly_deposit = $monthly_deposit * (((1 + $interest / $compounding_rate) ** ($numbers_years*$compounding_rate)) - 1) / ($interest / $compounding_rate);
                $sold_monthly = $sold_initial + $sold_monthly_deposit;
                echo "<p>The initial sold of the client's account $initial_submission RON initialy deposited over $numbers_years years 
                and accompanied by monthly deposits of $monthly_deposit RON
                at an annual interest rate of " . ($interest * 100) . "%,
                compounded monthly over $numbers_years years,
                with $numbers_compounding
                compounding periods is: " . number_format($sold_monthly, 2) . " RON</p>";

                echo "<p>The total amount in the account after $numbers_years years is: " . number_format($sold_only12 + $sold_monthly_deposit, 2) . " RON</p>";
                 
                $nominal_interest = $interest;
                $monthly_interest = $interest / $compounding_rate;
                echo "<p>The nominal interest is " . number_format($nominal_interest * 100, 2) . "%</p>";
                echo "<p>The interest compoundind monthly is " . number_format($monthly_interest * 100, 2) . "%</p>";

                //using for as repetitive structure
                $sold_only12 = $initial_submission;
                $years_sold = 0;
                for($i = 1; $i <= $numbers_compounding; $i++) {
                    $sold_only12 = $sold_only12 * (1 + $monthly_interest);
                    if ($i % 12 === 0) {
                        $years_sold++;
                        echo "<p>At the end of the year $years_sold out of $numbers_years in the client's account are " . number_format($sold_only12, 2) . " RON.</p>";
                    }
                }
                echo "<p>The sold of the client's account $initial_submission RON initialy deposited over $numbers_years years
                at an annual interest rate of " . ($interest * 100) . "%,
                compounded monthly over $numbers_years years,
                with $numbers_compounding
                compounding periods is: " . number_format($sold_only12, 2) . " RON</p>";

                $sold_monthly = $initial_submission * (1 + $monthly_interest);
                $years_sold = 0;
                for ($i = 1; $i <= $numbers_compounding - 1; $i++) {
                    if ($i % 12 === 0) {
                        $years_sold++;
                        echo "<p>At the end of the year $years_sold out of $numbers_years in the client's account are " . number_format($sold_monthly, 2) . " RON.</p>";
                    }
                    $sold_monthly = ($sold_monthly + $monthly_deposit) * (1 + $monthly_interest);
                }
                $years_sold++;
                $sold_monthly = $sold_monthly + $monthly_deposit;
                echo "<p>At the end of the year $years_sold out of $numbers_years in the client's account are " . number_format($sold_monthly, 2) . " RON.</p>";

                echo "<p>The initial sold of the client's account $initial_submission RON initialy deposited over $numbers_years years 
                and accompanied by monthly deposits of $monthly_deposit RON
                at an annual interest rate of " . ($interest * 100) . "%,
                compounded monthly over $numbers_years years,
                with $numbers_compounding
                compounding periods is: " . number_format($sold_monthly, 2) . " RON</p>";
            }
            if (isset($_POST['bank_interest'])) {
                    echo '<a href="calculator_bank.php" class="aurora-input">Try Again</a>';
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
        <p>&copy; 2024 PHP Bank Making Exercises</p>
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

        const form = document.getElementById('searchForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const query = document.getElementById('searchInput').value;
            if (query.trim() !== '') {
                window.location.href = `https://www.google.com/search?q=${encodeURIComponent(query)}`;
            }
        });

        const formCalc = document.getElementById('calcForm');
        const resultDiv = document.getElementById('result');

        if(formCalc && resultDiv){
            let debounceTimer;
            formCalc.addEventListener('input', () => {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(updateCalculator, 400);
            });

            async function updateCalculator() {
                const formData = new FormData(formCalc);
                resultDiv.classList.add('fade');
                try {
                    const response = await fetch('', { method: 'POST', body: formData });
                    const text = await response.text();
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(text, 'text/html');
                    const newResult = doc.getElementById('result').innerHTML;

                    setTimeout(() => {
                        resultDiv.innerHTML = newResult;
                        resultDiv.classList.remove('fade');
                        updateProgressBar();
                    }, 200);
                } catch (error) {
                    console.error('Error updating result:', error);
                }
            }

            function updateProgressBar() {
                const bar = document.querySelector('.result-bar');
                if (!bar) return;

                const value = parseFloat(bar.dataset.value);
                const width = Math.min(Math.abs(value), 100);
                let color = 'linear-gradient(90deg, #00aaff, #0066ff)';

                if (value > 0) color = 'linear-gradient(90deg, #00ffcc, #00aa55)';
                else if (value < 0) color = 'linear-gradient(90deg, #ff66cc, #cc0000)';

                
                bar.setAttribute('data-value', width.toFixed(0));
                bar.style.width = width + '%';
                bar.style.background = color;
            }
        }
        
    </script>
</body>
</html>
    

