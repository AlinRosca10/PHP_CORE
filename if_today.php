<?php
    //$day=$_GET["day"];
    $day=rand(1,7);
    $month=rand(1,12);
    $year=rand(1,12);

    if($day==1){
        echo 'Today is ' .$day .'Monday!';
    }elseif($day== 2){
        echo 'Today is ' .$day .'Tuesday!';
    }elseif($day== 3){
        echo 'Today is ' .$day .'Wednesday!';
    }elseif($day== 4){
        echo 'Today is ' .$day .'Thusday!';
    }elseif($day== 5){
        echo 'Today is ' .$day .'Friday!';
    }elseif($day== 6){
        echo 'Today is ' .$day .'Saturday!';
    }elseif($day== 7){
        echo 'Today is ' .$day .'Sunday!';
    }else{
        echo 'This is a error '. $day;
    }
?>