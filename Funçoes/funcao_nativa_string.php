<?php
$nomeSujo = '    Diogo    ';
$nome = 'Diogo Albuquerque';

// trim() => funão que limpa espaços inutilizaveis.
$nomeLimpo = trim($nomeSujo);
echo $nomeLimpo."<br/>";

// strlen() => exibe a quantidade de caracteres existentes
echo strlen($nomeSujo)."<br/>";
echo strlen($nomeLimpo)."<br/>";

// strtolower() => transforma os caracteres em caixas baixas (letras minusculas)
echo strtolower($nome)."<br/>";

// strtoupper() => transforma os caracteres em caixa alta (letras maiusculas)
echo strtoupper($nome)."<br/>";

//str_replace() => substitui a palavra Albuquerque pela palavra Silva na variavel $nome
$nomeAlterado = str_replace('Albuquerque', 'Silva', $nome);
echo $nomeAlterado."<br/>";

// str_replace() => substitui a letra e por E na variavel $nome
$nomeAlterado = str_replace('e', 'E', $nome);
echo $nomeAlterado."<br/>";

// substr() => extrai da variavel $nome a partir da posição 0, os 5 primeiros caracteres
echo substr($nome, 0, 5)."<br/>";

// substr() => extrai da variavel $nome a partir da posição 3, os 2 primeiros caracteres
echo substr($nome, 3, 2)."<br/>";

// substr() => extrai da variavel $nome de traz para frente a partir da posição -5, os 3 primeiros caracteres
echo substr($nome, -5, 3)."<br/>";







