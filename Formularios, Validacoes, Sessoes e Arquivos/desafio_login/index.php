<?php

session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    echo 'Olá, '.$nome.' - ';

} else {
    $_SESSION['aviso'] = 'Escreva seu nome corretamente';

    header('location: login.php');
    exit;
}

?>

<a href ='sair.php'>Sair</a>


