<?php
    $day=rand(1,7);
    $month=rand(1,12);
    $year=rand(1,12);

    switch($day){
        case 1:
            echo 'The first ' .$day.' day is ' .'Monday!';
            break;
        case 2:
            echo 'The secound '.$day.' day is ' .'Tuesday';
            break;
        case 3:
            echo 'The third '.$day.' day is ' .'Wednesday';
            break;
        case 4:
            echo 'The forth ' .$day.' day is ' .'Thursday!';
            break;
        case 5:
            echo 'The fift '.$day.' day is ' .'Friday';
            break;
        case 6:
            echo 'The sixth '.$day.' day is ' .'Saturday';
            break;
        case 7:
            echo 'The seventh ' .$day.' day is ' .'Sunday!';
            break;
        default:
            echo 'This is a error for day '. $day;
                
    }
    switch($month){
        case 1:
            echo 'The first ' .$month.' month is ' .'January!';
            break;
        case 2:
            echo 'The secound '.$month.' month is ' .'February!';
            break;
        case 3:
            echo 'The third '.$month.' month is ' .'Marth!';
            break;
        case 4:
            echo 'The forth ' .$month.' month is ' .'April!';
            break;
        case 5:
            echo 'The fift '.$month.' month is ' .'May!';
            break;
        case 6:
            echo 'The sixth '.$month.' month is ' .'June!';
            break;
        case 7:
            echo 'The seventh ' .$month.' month is ' .'Jully!';
            break;
        case 8:
            echo 'The eighth '.$month.' month is ' .'August!';
            break;
        case 9:
            echo 'The nineth '.$month.' month is ' .'September!';
            break;
        case 10:
            echo 'The tenth ' .$month.' month is ' .'Octomber!';
            break;
        case 11:
            echo 'The eleventh '.$month.' month is ' .'November!';
            break;
        case 12:
            echo 'The twelfth '.$month.' month is ' .'December!';
            break;
        default:
            echo 'This is a error for month '. $month;
                
    }
    switch($year){
        case 1:
            echo 'The first ' .$year.' year is ' .'Rat!';
            break;
        case 2:
            echo 'The secound '.$year.' year is ' .'Ox!';
            break;
        case 3:
            echo 'The third '.$year.' year is ' .'Tiger!';
            break;
        case 4:
            echo 'The forth ' .$year.' year is ' .'Rabbit!';
            break;
        case 5:
            echo 'The fift '.$year.' year is ' .'Dragon!';
            break;
        case 6:
            echo 'The sixth '.$year.' year is ' .'Snake!';
            break;
        case 7:
            echo 'The seventh ' .$year.' year is ' .'Horse!';
            break;
        case 8:
            echo 'The eighth '.$year.' year is ' .'Goat!';
            break;
        case 9:
            echo 'The nineth '.$year.' year is ' .'Monkey!';
            break;
        case 10:
            echo 'The tenth ' .$year.' year is ' .'Rooster!';
            break;
        case 11:
            echo 'The eleventh '.$year.' year is ' .'Dog!';
            break;
        case 12:
            echo 'The twelfth '.$year.' year is ' .'Pig!';
            break;
        default:
            echo 'This is a error for year '. $year;
                
    }
?>