<?php
    $page=$_GET["page"];//scrii direct fara ghilimele http://localhost:8080/EXERCITII_PHP/PHP/curs_3/switch_page.php?page=Despre

    switch($page){
        case "Acasa":
            echo "Ai selectat Acasa ";
            break;
        case "Despre":
            echo "Ai selectat Despre";
            break;
        case "Info":
            echo "Ai selectat Info";
            break;
        case "Oferte":
            echo "Ai selectat Oferte";
            break;
        case "Login":
            echo "Ai selectat Login";
            break;
        case "Links":
            echo "Ai selectat Links";
            break;
        default:
            echo "Selecteaza";
            break;
    }
?>