<?php
// $dizimo = function($valor){
//     return $valor * 0.1;
// };

// echo $dizimo(100)."<br/>";

// $doacao = $dizimo;

// echo $doacao(50);

$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(100);