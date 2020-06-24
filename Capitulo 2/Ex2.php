<?php
    $n1 = 5.0;
    $n2 = 7.1;

    $media = (($n1 * 3.5) + (7.1 * 7.5))/11;
    $media = number_format((float)$media,5,'.','');
    echo $media;


?>