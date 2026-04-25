


<?php 

$projeto = "Meu projeto";


$finalizado = false;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../src/output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="flex items-center w-screen h-screen justify-center">

<div class="w-96 h-24 border-2 flex items-center justify-center border-gray-700 rounded-md">

<?php 
if ($finalizado) : ?> <h1 class="text-green-500 text-2xl font-semibold">Finalizado</h1>

<?php else :  ?> <h1 class="text-red-500 text-2xl font-semibold">Não finalizado</h1>

<?php endif ?>
</div>


    
</body>
</html>


