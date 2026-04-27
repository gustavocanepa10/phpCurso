<?php


$p = [

   
        "Finalizado" => true
    


    


];


function verificaProjeto($p) {


    for ($i= 0; $i <count($p) ; $i++) { 

    if ($p['Finalizado']) {

      return "<span class='text-green-500'> Finalizado </span>";        

    }

     return "<span class='text-red-500'> Andamento </span>";
        
    }
     


}


$resultado = verificaProjeto($p);
echo $resultado;









?>