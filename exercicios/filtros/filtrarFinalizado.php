<?php
$projetos = [

["nome" => "App", "Finalizado" => false],
["nome" => "API", "Finalizado" => true],
["nome" => "Backend", "Finalizado" => true],

];


function filtrarFinalizado($projetos) {

    $novaLista = [];


    for ($i = 0; $i < count($projetos); $i++) { 
        
        if ($projetos[$i]["Finalizado"]) {

            $novaLista[] = $projetos[$i];

        }

    }


    return $novaLista;

}


$resultado = filtrarFinalizado($projetos);


foreach ($resultado as $valor) {
    echo $valor["nome"] . " - Finalizado<br>";
}
















?>