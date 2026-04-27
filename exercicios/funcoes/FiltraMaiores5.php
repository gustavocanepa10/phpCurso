<?php

$numeros = [2,5,8,12,14,4];


function filtraArray($numeros, $valor) {


    $acumulador = [];
    for ($i=0; $i <count($numeros) ; $i++) { 
      
        if ($numeros[$i] >= $valor) {

        $acumulador[] = $numeros[$i];

        }



    }

    return $acumulador;



}


$resultado = filtraArray($numeros,8);

$acumulador = "";
foreach ($resultado as $value) {

    $acumulador .= $value;

}

echo $acumulador;












?>