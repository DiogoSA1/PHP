<?php
$array = [
    'nome' => 'Diogo',
    'idade' => 26,
    'empresa' => 'anônima',
    'cor' => 'Azul',
    'profissão' => 'programador'
];

// key_exists() => verifica se existe uma chave especifica dentro de um array
if(key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $idade." anos"."</br>";
} else {
    echo 'Não tem idade'."</br>";
}

print_r($array);
echo "</br>";


// array_keys() => cria um novo array com as chaves do array passado no parametro
$chaves = array_keys($array);
print_r($chaves);
echo "</br>";

// array_values() => cria uma novo array com os valores do array passado no parametro
$valores = array_values($array);
print_r($valores);
echo "</br>";

