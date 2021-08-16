<?php

$array = range('a', 'f');

// array_slice() =>  Extrai fatias do meu array com base nos parametros passados
$retorno = array_slice($array, 0, 2);
$retorno1 = array_slice($array, 2, 4);
$retorno2 = array_slice($array, 1, 3);
$retorno3 = array_slice($array, -2, 2);
$retorno4 = array_slice($array, -2, 1);

// para visualizar os resultados acima mude o nome do array abaixo
print_r($retorno1);
