<?php



$numeros = [1,3,4,6,8,12,16,20];


$acumulador = [];
for ($i=0; $i <count($numeros) ; $i++) { 
    
    if ($numeros[$i] % 2 == 0) {

        $acumulador[] = $numeros[$i];

    }

}

 echo count($acumulador);


?>


