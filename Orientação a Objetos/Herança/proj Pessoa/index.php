<?php

require_once ("Pessoa.php");
require_once ("Aluno.php");
require_once ("Funcionario.php");
require_once ("Professor.php");

echo "<pre>";
$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Funcionario();
$p4 = new Professor();

$p1->setNome("Pedro");
$p2->setNome("Lucas");
$p3->setNome("Marcos");
$p4->setNome("Maria");

$p1->setSexo("M");
$p2->setSexo("M");
$p3->setSexo("M");
$p4->setSexo("F");


$p2->setCurso("Informatica");
$p4->setSalario(2500);
$p3->setSetor("Estoque");

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);


echo "</pre>";

