<?php
    $raio = 2.00;
    $pi = 3.14159;
    $area = $pi * ($raio * $raio);

    $resultado = number_format((float)$area,4,'.','');
    echo $resultado;
?>