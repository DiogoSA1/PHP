<?php 

require_once("Pessoa.php");
require_once("Livro.php");
require_once("Publicacao.php");

$p = [];
$l = [];

$p[0] = new Pessoa("Diogo", 26, "Masculino");

$l[0] = new Livro("Poder sem Limites", "Tonny Robins", 260, $p[0]);


$l[0]->abrir();
$l[0]->folhear(80);
$l[0]->avancarPagina();
$l[0]->avancarPagina();
$l[0]->voltarPagina();
$l[0]->folhear(10);
$l[0]->avancarPagina();
$l[0]->voltarPagina();

$l[0]->detalhes();

// echo "<pre>";
// print_r($p[0]);
// print_r($l[0]);
// echo "</pre>";
