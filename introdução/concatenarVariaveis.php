<?php

$nome = 'Diogo';
$sobrenome = 'Albuquerque';
$idade = 26;

$nomeCompleto = $nome.$sobrenome;
$nomeCompleto1 = $nome.' '.$sobrenome;
$nomeCompleto2 = "$nome $sobrenome";
$nomeCompleto3 = '$nome $sobrenome';
$frase = "$nome $sobrenome tem $idade anos";

$nomeCompleto4 = $nome;
$nomeCompleto4.= $sobrenome; // o ponto pode ser substituido por outros sinais. */+-

echo $nomeCompleto ."<br/>";
echo $nomeCompleto1 ."<br/>"; 
echo $nomeCompleto2 ."<br/>"; 
echo $nomeCompleto3 ."<br/>";
echo $nomeCompleto4 ."<br/>";
echo $frase;
