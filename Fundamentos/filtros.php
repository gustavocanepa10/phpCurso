<?php

$numeros = [

"titulo" => "Projeto",
"finalizado" => false




];

function filtrarNumero($numeros)  {


    if ($numeros['finalizado'] or $numeros['titulo'] == "Projeto") {
        return "<span> Correto  </span>";
    }


    return "<span>Incorreto</span>";


}


$resultado = filtrarNumero($numeros);

echo $resultado;





?>

<!-- is_null verifica se é nulo -->