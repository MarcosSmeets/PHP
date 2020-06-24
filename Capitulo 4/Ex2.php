<?php
    $sexo = $_GET['s'];
    $altura = $_GET['a'];

    if($sexo == "M"){
        $calculo = (72.7*$altura)-58;
        echo "Seu peso ideal é {$calculo}";
    }
    else if($sexo == "F"){
        $calculo = (62.1*$altura)-44.7;
        echo "Seu peso ideal é {$calculo}";
    }
?>