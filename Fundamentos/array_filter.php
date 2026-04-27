<?php

$numeros = [1,3,2,7,8,10];


// array_filter

// recebe dois parametros(lista, numero de cada indice)
$pares = array_filter($numeros, function ($n) {

    return $n % 2 == 0;


});

foreach ($pares as $par) {

    echo $par .= "<br>";

}



// <!-- strlen()   conta caracteres de strig -->








?>


