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
    echo $idade." anos";
} else {
    echo 'Não tem idade';
}

