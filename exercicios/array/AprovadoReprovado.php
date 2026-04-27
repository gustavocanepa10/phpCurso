<?php


$notas = [4,7,9,5,10];


$acumulador = "";
for ($i=0; $i<count($notas);$i++) { 
    

    if ($notas[$i] > 6 ) {

    echo "$acumulador $notas[$i]";

    }


}



?>