<?php

$array = [
   "Titulo" => "Batman",
   "data" => "22/05/2001"
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<ul>


<?php 
// usado quando se tem indice
// $acumulador = "";
// for ($i=0; $i < count($array) ; $i++) { 


//     $acumulador .= $array[$i];
    

// }

// echo "<li> $acumulador  </li>";


// usado para quando usar arrays associativos e não com chave
foreach ($array as $value) {

   echo "<li> {$value} </li>";

}

?>

</ul>



    
</body>
</html>