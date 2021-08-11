<?php
// session_start() => cria ou recarrega uma sessão passada via GET ou POST, ou passada via cookie
session_start();

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

    // setcookie() => define um cookie para ser enviado para cabeçalhos HTTP.
    // deve ser enviado antes de qualquer saida na tela.
    // para acessar o cookie use o array $_COOKIE[]

    // time() => função que retorna o tempo em milissegundos
    // 86400 => qtd de milisegundos existentes em um dia
    // 30 => qtd de dias
    // $expiração => variavel que ira determinar a validade do cookie
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    echo 'Nome: '.$nome."<br/>";
    echo 'Email: '.$email."<br/>";
    echo 'Idade: '.$idade;

} else {

    // $_SESSION[] = Array que armazena dados para exibição de mensagens dentro de sessões.
    $_SESSION['aviso'] = 'Preencha os itens corretamente';

    //header() => redireciona para o cabeçalho de um caminho especificado no parametro da função
    header('location: HTTP_Request.php');
    exit;
}

