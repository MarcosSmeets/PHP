<?php
    $n = $_GET['n'];

    if($n % 2 == 0){
        echo "é par</br>";
    }else{
        echo "é impar";
    }

    if($n >= 0){
        echo "é positivo";
    }else{
        echo "é negativo";
    }

?>