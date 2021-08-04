<?php

// (CONDICIONAL) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

$idade = 21;

$resultado = ($idade < 18) ? 'MENOR' : 'MAIOR';

echo $resultado ."<br/>";

$resposta = ($idade < 25) ? true : false;

if ($resposta) {
    echo 'Menor ';
} else {
    echo 'Maior';
};

