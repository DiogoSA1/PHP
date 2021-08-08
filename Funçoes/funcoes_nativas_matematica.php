<?php
// Aplicação de funções matematicas nativas
$num = -8.4;
// abs() => função para transformar um numero para bsoluto.
echo abs($num)."<br/>";

// pi() => retorna numero pi = 3.14...
echo pi()."<br/>";

$num1 = 2.8;
// floor() => arrendonda numero para baixo
echo floor($num1)."<br/>";

// ceil() => arredonda numero para cima
echo ceil($num1)."<br/>";

$num2 = 12.8979685848;
// round(..., 2) => arrendonda o numero para cima ou para baixo até a segunda casa decimal.
echo round($num2)."<br/>";

// rand() => gera numeros aleatórios dentro do intervalo especificado.
$aleatorio = rand(0, 100);
echo $aleatorio."<br/>";

$lista = [1, 4, 5, 9];
// max() => exibe o maior numero da lista
echo max($lista)."<br/>";

// min() => exibe  menor numero da lista
echo min($lista)."<br/>";

// para mais funções matematicas nativas consultat documentação php
// php.net/manual/pt_BR/