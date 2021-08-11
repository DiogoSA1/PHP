<?php
// require() => função cujo objetivo é receber arquivo e carrega-lo no arquivo atual.
require('header.php');
require('config.php');

// require_once() => garante que o arquivo seja carregado uma unica vez
require_once('header.php');

// include() => semelhante ao require, porém executa todo o restante do código independente do arquivo não existir
include('abc.php');

echo "<br/>";

echo 'Conteúdo do site...<br/>';

echo 'Nome do usuario é: '.$usuario;


