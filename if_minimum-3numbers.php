<?php
    // $x=$_GET['x'];
    // $y=$_GET['y'];
    // $z=$_GET['z'];

    $x=rand(-100,1000);
    $y=rand(-10,1110);
    $z=rand(-1,2310);

    if($x>$y)
    {
        if($y>$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is the third number ' .$z .'!';
        }else if($y==$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is ' .$z .', but the secound number and the third number are equals!';
        }else if($y<$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is the secound number ' .$y .'!';
        }
        else
        {
            echo 'This is a error for $x>$y';
        }
    }else if($x==$y)
    {
        if($y>$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is the third number ' .$z .', but the first number and the secound number are equals!';
        }else if($y==$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is ' .$z .', but all numbers:the first number, the secound number and the third number are equals!';
        }else if($y<$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is the secound number ' .$y .', but the first number and the secound number are equals!';
        }
        else
        {
            echo 'This is a error for $x==$y';
        }
    }
    else if($x<$y)
    {
        if($x>$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is the third number ' .$z .'!';
        }else if($x==$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is ' .$z .', but the first number and the third number are equals!';
        }else if($x<$z)
        {
            echo 'The minimum of ' .$x .', ' .$y .' and ' .$z .' is the first number ' .$x .'!';
        }
        else
        {
            echo 'This is a error for $x<$y';
        }
    }
    else
        {
            echo 'This is a general error';
        }
?>