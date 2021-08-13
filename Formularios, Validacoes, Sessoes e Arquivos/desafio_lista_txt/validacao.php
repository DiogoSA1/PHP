<?php
session_start();

$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
;

if ($nome) {
    $nome = '<li>'.$nome.'</li>';
    $lista = file_get_contents('lista.txt');
    $lista .= "\n $nome";
    $lista = file_put_contents('lista.txt', $lista);
    
    header('location: index.php');
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);
    
} else {

    $_SESSION['aviso'] = 'Preencha os itens corretamente';

    header('location: index.php');
    exit;
}
