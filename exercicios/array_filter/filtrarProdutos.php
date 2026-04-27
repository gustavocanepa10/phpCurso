<?php

$produtos = [
    ["nome" => "Mouse", "preco" => 50],
    ["nome" => "Teclado", "preco" => 150],
    ["nome" => "Monitor", "preco" => 900],
];

$produtosCaros = array_filter($produtos, function ($produto) {

return $produto['preco'] < 900;

}
);




foreach ($produtosCaros as $produto) {
   echo $produto['preco'] .= "<br>";
}


?>