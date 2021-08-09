<?php

$lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5'];
$alunos = ['Diogo', 'Pedro', 'João', 'Sabrina', 'Maria'];
$aprovados =['Diogo', 'Pedro'];
$numeros = [25, 32, 44, 19, 27, 42];

// count() => exibe a quantidade de intens existentes no array
echo count($lista)."<br/>";

// array_diff() => exibe a diferença existente entre os dois arrays
$reprovados = array_diff($alunos, $aprovados);
echo print_r($reprovados)."<br/>";

// array_filter() => recebe como segundo paramentro uma função afim  realizar filtros e gerar um novo array
$filtrados = array_filter($numeros, function($item){
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});
echo print_r($filtrados)."<br/>";

// array_map() => recebe como primeiro parametro uma função afim de aplica-la para cada elemento array e gerar um novo array
$dobrados = array_map(function($items){
    return $items * 2;
}, $numeros);

echo print_r($numeros)."<br/>";
echo print_r($dobrados);



