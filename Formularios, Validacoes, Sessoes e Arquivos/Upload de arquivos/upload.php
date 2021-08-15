<?php
// <pre> => O texto em um elemento é exibido em uma fonte de largura fixa, e o texto preserva espaços e quebras de linha. O texto será exibido exatamente como escrito no código-fonte HTML
// $_FILES => Um array associativo de items enviado através do script atual pelo método HTTP POST.
echo '<pre>';
print_r($_FILES);

// md5 — Calcula o "hash MD5" de uma string
// Um hash MD5 é criado pegando uma sequência de qualquer comprimento e codificando-o em uma impressão digital de 128 bits.
// Um hash MD5 NÃO é criptografia. É simplesmente uma impressão digital da entrada dada.
// Os hashes MD5 são comumente usados com strings menores ao armazenar senhas, números de cartão de crédito ou outros dados confidenciais em bancos de dados, como o popular MySQL
// time() => Retorna a hora atual medida no número de segundos desde a Era Unix (January 1 1970 00:00:00 GMT).
// rand() => Gera um inteiro aleatório
// A combinação destas funções abaixo concatena o time e o range, e gera uma combinação de string MD5, para gerar um novo nome para o arquivo temporario
// move_uploaded_file() => Move um arquivo enviado para uma nova localização com um novo nome
// in_array() =>  Checa se um valor existe em um array

// A condicional abaixo ira verificar se no array $_FILES existem arquivos com as seguintes extensões e executar o move_uploaded_file

$permitidos = ['image/jpg', 'image.jpeg', 'image/png'];
if (in_array($_FILES['arquivo']['type'], $permitidos)) {

    $nome =md5(time().rand(0, 1000)).'.png';
    // $nome = $_FILES['arquivo']['name'];
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

    echo 'Arquivo movido com sucesso';
} else {
    echo 'Arquivo não encontrado';
}