<?php
// ao clicar na pagina anterior em 'Apagar Cookie' sera executado o script abaixo
// time() - 3600 => envia o cookie instantaneamente e retorna vazio '' conforme parametrizado na função setcookie abaixo
setcookie('nome', '', time() - 3600);

//header() => redireciona para o cabeçalho de um caminho especificado no parametro da função   
header('location: HTTP_Request.php');
exit;
