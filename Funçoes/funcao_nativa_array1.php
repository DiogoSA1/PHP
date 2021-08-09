<?php

$numeros = [25, 32, 44, 19, 27, 42];
$nomes = ['Diogo', 'Silva', 'Albuquerque'];

// array_pop() => remove o ultimo item do array
array_pop($numeros);
echo print_r($numeros)."<br/>";

// array_pop() => remove o primeiro item do array
array_shift($numeros);
echo print_r($numeros)."<br/>";

// in_array() => combinado com condicionais percorre itens dentro do array
if(in_array(90, $numeros)) {
    echo 'Existe'."<br/>";
} else {
    echo 'Não Existe'."<br/>";
}

// array_search() => exibe a chave que o item desejado se encontra dentro do array
$posicao = array_search(44, $numeros);
echo $posicao."<br/>";

// sort() => organiza os items do array em ordem crescente
sort($numeros);
echo print_r($numeros)."<br/>";

// sort() => organiza os items do array em ordem decrescente
rsort($numeros);
echo print_r($numeros)."<br/>";

// sort() => organiza os items do array em ordem crescente mantendo as referências da chave
asort($numeros);
echo print_r($numeros)."<br/>";

// sort() => organiza os items do array em ordem decrescente mantendo as referências da chave
arsort($numeros);
echo print_r($numeros)."<br/>";

// implode() => Realiza a união de elementos de um array
$juntarNomes = implode(' ', $nomes);
echo $juntarNomes."<br/>";


