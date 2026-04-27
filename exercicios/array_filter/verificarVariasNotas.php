<?php



$notas = [5,7,9,10,4];


$notasAprovadas = array_filter($notas, function ($nota) {

    return $nota >=6;

});


foreach ($notasAprovadas as $nota) {
    

echo $nota .= "<br>";



}












?>