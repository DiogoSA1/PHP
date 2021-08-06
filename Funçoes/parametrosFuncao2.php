<?php

function somar($n1, $n2, &$total) {
    $total = $n1 + $n2;
}

$x = 2;
$y = 4;
$soma = 0;

somar($x, $y, $soma);

echo $soma;


