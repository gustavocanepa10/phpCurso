

<?php 


$numeros = [2,4,6,3,7];


$acumulador = "";
for ($i=0;$i <count($numeros);$i++) {


if ($numeros[$i] % 2 == 0) {


    echo "<li>$acumulador $numeros[$i]</li>";


}




;}





?>