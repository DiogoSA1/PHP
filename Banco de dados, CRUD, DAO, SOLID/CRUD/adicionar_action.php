<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {
    //Verificação se ja existe o email cadastrado
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    // Si o email não existir(rowCount==0) executa e evia para o banco de dados
    if($sql->rowCount() === 0) {

        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        //$sql->bindParam(':email', $email);
        $sql->execute();
    
        header('Location: index.php');
        exit;
    } else {
        header("Location: adicionar.php");
    exit;
    }

} else {
    header("Location: adicionar.php");
    exit;
}