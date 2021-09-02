<?php
require_once 'autoload.php';

use \matematica\Basica;
use \foto\Upload;

$m = new Basica();
echo $m->somar(15,10);

$u = new Upload();