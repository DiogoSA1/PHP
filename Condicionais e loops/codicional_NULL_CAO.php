<?php
$nome = 'Diogo';
$sobrenome = 'Albuquerque';

// para testar os códigos abaixo comente as variaveis acima.
$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; // metoddo tradicional de condicional ternaria
$nomeCompleto = $sobrenome ?? ''; // condicional NULL CAO
$nomeCompleto = $nome ?? 'visitante'; 

echo $nomeCompleto;