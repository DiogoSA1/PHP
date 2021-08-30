<?php

require_once ("Animal.php");
require_once ("Mamifero.php");
require_once ("Canguru.php");
require_once ("Cachorro.php");
// require_once "Animal.php";
// require_once "Animal.php";
// require_once "Animal.php";
// require_once "Animal.php";
$m = new Mamifero();
$c = new Canguru();
$k = new Cachorro();

$m->setPeso(5.70);
$m->setIdade(8);
$m->setMembros(4);
$m->locomover();
$m->alimentar();
$m->emitirSom();

$c->setPeso(55.30);
$c->setIdade(3);
$c->setMembros(4);
$c->locomover();
$c->alimentar();
$c->emitirSom();
$c->usarBolsa();

$k->setPeso(5.70);
$k->setIdade(8);
$k->setMembros(4);
$k->locomover();
$k->alimentar();
$k->emitirSom();
$k->abanarRabo();
echo "<pre>";
print_r($m);
print_r($c);
print_r($k);

echo "</pre>";
