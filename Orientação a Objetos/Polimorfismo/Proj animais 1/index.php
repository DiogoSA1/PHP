<?php

require_once("Animal.php");
require_once("Mamifero.php");
require_once("Lobo.php");
require_once("Cachorro.php");

$c = new Cachorro();
//$c->emitirSom();
$c->reagirFrase("Olá");
$c->reagirFrase("Vai Apanhar");
$c->reagirHora(11, 45);
$c->reagirHora(21, 00);
$c->reagirDono(true);
$c->reagirDono(false);


