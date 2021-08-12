<?php

// file_get_contents() => Lê todo o conteúdo de um arquivo para uma string
$texto = file_get_contents('success.txt');

// explode() => divide uma string com base no primeiro parametro passado
$texto = explode('\n', $texto);

// count() => conta todos os elementos em uma matriz ou algo em um objeto
echo 'LINHAS: '.count($texto);

