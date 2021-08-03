<?php

$bolo1 = [
    'fermento',
    'açucar',
    'ovo',
    'leite'
];

$bolo2 = [
    ...$bolo1,
    'corante'
];
echo $bolo2[2] ."<br/>";

$lista = ['joão', 'pedro', 'tiago'];
$lista1 = ['bruno', 'feliple', 'lucas'];
$lista2 = [...$lista, ...$lista1];

print_r($lista2);