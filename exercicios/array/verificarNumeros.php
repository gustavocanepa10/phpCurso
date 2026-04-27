

<?php 


$numeros = [1,2,3,4,5,6,8,12,15,25];

$acumulador = "";
for ($i=0; $i < count($numeros) ; $i++) { 
    
    if ($numeros[$i] > 5) {
        echo "$acumulador $numeros[$i]  <br>";
    };

;}



?>