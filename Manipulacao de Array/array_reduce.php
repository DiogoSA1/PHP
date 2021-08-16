<?php

$numeros = range(1, 5);

function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
}
// array_reduce() => Reduz iterativamente o array a um único valor usando uma função de retorno de chamada
$total = array_reduce($numeros, 'somar');

echo $total."</br>";

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Cicrano', 'sexo' => 'M', 'nota' => 15],
    ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 8],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 6],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 12],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 17]

];

// quantidade de sexos masculinos no array
function contar_m($subtotal, $item) {
    if($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}
$total_m = array_reduce($pessoas, 'contar_m');

echo "Total de Homens : ".$total_m."</br>";

// Soma das notas dos Sexos masculinos
function soma_m($subtotal, $item) {
    if($item['sexo'] === 'M'){
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$soma_notas = array_reduce($pessoas, 'soma_m');
echo "Soma das notas dos homens: ".$soma_notas."</br>";

// Média de notas dos homens
$medias = $soma_notas / $total_m;
 echo 'A média de notas dos homens é: '.$medias;