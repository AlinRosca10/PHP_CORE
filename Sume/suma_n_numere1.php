<?php
echo 'Enter numbers separated by spaces: ';
$input=trim(fgets(STDIN));  // Read input from the command line

$numbers=explode(' ', $input);  // Split input into an array of numbers
$sum=0;

foreach($numbers as $number) 
{
    $sum += (int)$number;  // Convert each value to an integer and add to sum
}

echo 'The sum is: ' . $sum . '\n';
echo '\n';
?>
