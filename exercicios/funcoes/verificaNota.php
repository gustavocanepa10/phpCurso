
<?php 


$nota = 5;


function verificarNota($nota) {


    if ($nota >= 6) {
        return "Aprovado";
    }

    return "Reprovado";

}



$resultado = verificarNota($nota);

echo $resultado;











?>