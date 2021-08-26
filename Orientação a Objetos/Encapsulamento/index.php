<?php
require_once ("Controller.php");
require_once ("controleRemoto.php");

echo"<h1>PROJETO CALCULADORA</h1>";

$c = new ControleRemoto();
$c->ligar();
$c->maisVolume();

$c->abrirMenu();





