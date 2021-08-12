<?php
$texto = 'Diogo Albuquerque';

// file_put_contents() => Grava dados em um arquivo
file_put_contents('nome.txt', $texto);

echo 'Arquivo criado com sucesso';

// Abaixo atribuimos para a variavel lesson o arquivo success, em seguida
// adicionamos a esta variavel o nome que a variavel $texto recebeu
// por ultimo adicionamos o conteudo da variavel lesson para o arquivo success.txt 
$lesson = file_get_contents('success.txt');
$lesson .= "\n $texto";
file_put_contents('success.txt', $lesson); 