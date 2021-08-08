<?php

// Atribuindo tipos e valores padrão para o parametro de uma função
function somar(int $n1, int $n2=0, int $n3=0) {
    $total = $n1 + $n2 + $n3;
    return $total;
}

// $resultado = somar(2, 2);
// echo $resultado ."<br/>";

$x = somar(1);
$y = somar(2, 3, 1);
$w = somar($x, $y);

echo $w;


