<?php
    $idade = $_GET['idade'];

    if($idade >= 5 && $idade <= 7){
        echo "Infantil A";
    }
    else if($idade >= 8 && $idade <= 10){
        echo "Infantil B";
    }
    else if($idade >= 11 && $idade <= 13){
        echo "Juvenil A";
    }
    else if($idade >= 14 && $idade <= 17){
        echo "Juvenil B";
    }else{
        echo "Adulto";
    }

?>