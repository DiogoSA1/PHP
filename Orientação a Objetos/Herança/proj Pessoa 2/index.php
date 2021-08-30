<?php

require_once ("Pessoa.php");
require_once ("Aluno.php");
require_once ("Professor.php");
require_once ("Bolsista.php");
require_once ("Visitante.php");
require_once ("Tecnico.php");

echo "<pre>";
$v1 = new Visitante();
$a1 = new Aluno();
$a1->setNome("Pedro");
$a1->setMatr(1234);
$a1->setIdade(21);
$a1->setSexo("M");
$a1->setCurso("Informática");
$a1->pagarMensal();
print_r($a1);

$b1 = new Bolsista();
$b1->setNome("Maria");
$b1->setBolsa(12.5);
$b1->setCurso("Adiminstração");
$b1->setIdade(28);
$b1->setMatr(1212);
print_r($b1);



//print_r($v1);


echo "</pre>";

