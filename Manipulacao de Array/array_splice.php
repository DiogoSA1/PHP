<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

// array_splice() =>  Remove ou modifica itens de um array com base nos parametros passados
//array_splice($array, 2, 2);
//array_splice($array, 2, 1, 'k');
///array_splice($array, 3, 2, ['k', 'o']);
//array_splice($array, -2, 1, 90);
array_splice($array, -2, 2, [90, 91, 92]);

// para visualizar os resultados acima descomente as linhas comentadas
print_r($array);
