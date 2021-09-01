<?php

require_once("Video.php");
require_once("Gafanhoto.php");
require_once("Pessoa.php");
require_once("AcoesVideos.php");
require_once("Visualizacao.php");

$v[0] = new Video("Aula 01 de POO");
$v[1] = new Video("Aula 12 de PHP");
$v[2] = new Video("Aula 15 de HTML5");

$q[0] = new Gafanhoto("Diogo", 22, "M", "gfhfh");
$q[1] = new Gafanhoto("Maria", 22, "F", "abcd");

$vis[0] = new Visualizacao($q[0], $v[2]);
$vis[1] = new Visualizacao($q[0], $v[1]);
$vis[2] = new Visualizacao($q[0], $v[0]);



echo "<pre>";
print_r($vis);
echo "</pre>";




