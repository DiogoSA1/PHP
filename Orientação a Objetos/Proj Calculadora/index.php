<?php

require_once "Calculadora.php";

$calc = new Calculadora();

$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->mutiply(3);
$calc->divide(2);
$calc->add(0.5);
$calc->clear();

echo "Total: ".$calc->total();