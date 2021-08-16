<?php
// range() => cria um array que começa no 1 e vai até 20
$array = range(1, 20);

// Cria um array começando com 1 até o 20 pulando de 2 em 2
$array1 = range(1, 20, 2);

// Cria um array que come;a em 50 até 20
$array2 = range(50, 20);

//Cria uma sequencia que começa com a letra 'a' até o 'g' 
$array3 = range('a', 'g');

//Cria uma sequencia que começa com a letra 'f' até b 'g' 
$array4 = range('f', 'b');

//Cria uma sequencia que começa com a letra 'b' até f 'g' 
$array5 = range('b', 'f');

// Para percorrer os arrays acima mude o nome do array no loop abaixo
foreach($array5 as $item) {
    echo $item.'<br/>';
}

