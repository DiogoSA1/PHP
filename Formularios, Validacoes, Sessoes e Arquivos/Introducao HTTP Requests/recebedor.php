<?php

// filter_input() => realiza o filtro de uma variavel externa, com base nos parametros atribuidos a função
// FILTER_VALIDATE_EMAIL valida se o endereço é valido
// FILTER_SANITIZE_NUMBER_INT remove todos os caracteres exceto digitos, sinais de + e -
// FILTER_VALIDATE_INT valida se o caractere é um numero inteiro
// FILTER_SANITIZE_SPECIAL_CHARS remove ou codifica outros caracteres opcionais
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

if ($nome && $idade && $senha && $email) {

    echo 'Nome: '.$nome."<br/>";
    echo 'Email: '.$email."<br/>";
    echo 'Idade: '.$idade;

} else {

    //header() => redireciona para o cabeçalho de um caminho especificado no parametro da função
    header('location: HTTP_Request.php');
    exit;
}

