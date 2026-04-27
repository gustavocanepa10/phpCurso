
<?php 


$numeros = [1,3,5,7,9,12,14,16];


$acumulador = 0;
for ($i=0; $i <count($numeros) ; $i++) { 

   $acumulador += $numeros[$i];

}

echo $acumulador;


?>

<!-- += soma para cada loop -->