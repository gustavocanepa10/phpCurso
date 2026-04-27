<?php



$palavras = ["João", "Pedro", "Guilherme", "Gustavo"];


$palavrasFiltradas = array_filter($palavras, function ($palavra) {

    return strlen($palavra) > 5;


});



foreach ($palavrasFiltradas as $palavra) {
    echo $palavra .= "<br>";
}








?>

