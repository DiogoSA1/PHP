
<h1>Cabeçalho</h1>
<?php

// exibe o cookie sem apresentar mensagem de erro quando ele ainda não tiver sido enviado
// isset() => funcao que faz o set(verifica) de variaveis somente se ele existir ou for definido
if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo '<h3>'.$nome.'</h3>';
}
?>
<hr/>
