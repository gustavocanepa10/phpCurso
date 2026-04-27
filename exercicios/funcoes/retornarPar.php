
<?php

$numeros = [1,3,5,7,8,4];



function retornarPares($numeros) : string  {

$acumulador = "";
for ($i=0; $i <count($numeros) ; $i++) { 


    if ($numeros[$i] % 2 == 0) {
        $acumulador .=  $numeros[$i] .= "<br>";
    }

}

return $acumulador;


    
}


$resultado = retornarPares($numeros);
echo $resultado;



?>

