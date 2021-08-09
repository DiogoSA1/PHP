<?php
// Manipulando strings com funções nativas
$nome = 'Diogo Albuquerque';
$frase = 'era uma vez';
$numero = 5192.14;

// strpos() = busca e exibe a posição que se encontra o caractere desejado
$posição = strpos($nome, 'o');
echo $posição."<br/>";

// combinando a função strpos() com condicionais
$posicao = strpos($nome, 'A');
if ($posicao < -1) {
    echo "Não Achou";
} else {
    echo $posicao."<br/>";
}

// ucfirst() => transforma a primeira letra da frase em maiuscula
echo ucfirst($frase)."<br/>";

// ucwords() => transforma a primeira letra da cada palavra em maiuscula
echo ucwords($frase)."<br/>";

// explode() => transforma caracteres de uma string em itens de um array
$fraseArray = explode(' ',$frase);
print_r($fraseArray)."<br/>";

// number_format() => formatação de numero com entrada de parametros opcionais
echo "R$ ".number_format($numero, 2, ',', '.')."<br/>";
