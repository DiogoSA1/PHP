<?php

function somar($n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$resultado = somar(2, 2);
echo $resultado ."<br/>";

$x = somar(1, 2);
$y = somar(2, 3);
$w = somar($x, $y);

echo $w;
