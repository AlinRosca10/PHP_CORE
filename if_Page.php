<?php
    $page=$_GET["page"];

    
    if ($page== "Acasa"){
        echo "Ai selectat Acasa ";
    }
    elseif($page== "Despre"){
        echo "Ai selectat Despre ";
    }
    elseif($page== "Info"){
        echo "Ai selectat Info ";
    }
    elseif($page== "Login"){
        echo "Ai selectat Login ";
    }
    elseif($page== "Links"){
        echo "Ai selectat Links";
    }
    else{
        echo "Selecteaza";
    }
?>