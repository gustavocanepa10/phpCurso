
<?php 

$numeros = [3,6,8,9,1,2];

$acumulador = 0;
for ($i=0; $i <count($numeros) ; $i++) { 
    
    if ($numeros[$i] > 5) {

    $acumulador += $numeros[$i];

    }



}

echo $acumulador;


?>