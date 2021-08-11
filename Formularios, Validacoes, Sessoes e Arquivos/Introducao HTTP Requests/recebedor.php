<?php

// filter_input() => realiza o filtro de uma variavel externa, com base nos parametros atribuidos a função
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$senha = filter_input(INPUT_POST, 'senha');

if ($nome && $idade && $senha) {

    echo 'Nome: '.$nome."<br/>";
    echo 'Idade: '.$idade;

} else {

    //header() => redireciona para o cabeçalho de um caminho especificado no parametro da função
    header('location: HTTP_Request.php');
    exit;
}

