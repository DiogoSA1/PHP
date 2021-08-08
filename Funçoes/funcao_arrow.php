<?php
// Definindo uma Arrow function

// $dizimo = function($valor){
//     return $valor * 0.1;
// };

// echo $dizimo(100)."<br/>";

// $doacao = $dizimo;

// echo $doacao(50);

$dizimo = fn($valor) => $valor * 0.1;

$somar = fn($n1, $n2) => $n1 + $n2; 

echo $dizimo(100) ."<br/>";

echo $somar(2, 3);