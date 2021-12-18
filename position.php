<?php 

    $array = array(0,42,66,89,102);

    $array2 = array(5,23,78,111,987);


    $key = array_search(66, $array); // devuelve la posición 2 [el array comienza en la posición 0]
    $key2 = array_search(66, $array2); // no devuelve nada porque no lo encuentra

    echo $key;

    echo $key2;
    


?>