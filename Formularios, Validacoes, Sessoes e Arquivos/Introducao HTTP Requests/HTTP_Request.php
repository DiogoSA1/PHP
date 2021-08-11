<?php
// session_start() => cria uma sessão ou resume a sessão atual baseado em um id de sessão passado via GET ou POST, ou passado via cookie
session_start();

require('header.php');

// Exibe a mensagem da sessão se ela existir e em seguida apaga a mesma ao recarregar o navegador
if ($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<!-- A seguir é criado e exibido um formulário cujo função é recolher alguns dados do usuario
 e envia-los para a o arquivo recebedor-->

<!-- O método POST faz o envio dos dados para o arquivo recebedor internamente sem que o usuario consiga
perceber e visulizar os dados na sua url -->

<!-- Substituindo POST por GET (metodo padrão) o usuario consegue visualizar os dados que estão sendo enviados na sua prória url -->

<!-- na linha abaixo sera criado um link de referencia para apagar o cookie -->
<a href = "apagar.php">Apagar Cookie</a>

<form method="POST" action="recebedor.php">
    <label>
        Nome:
        <br>
        <input type="text" name="nome"/>
    </label>
    <br>
    <br>
    
    <label>
        Email:
        <br>
        <input type="text" name="email"/>
    </label>
    <br>
    <br>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade"/>
    </label>
    <br>
    <br>

    <label>
        Senha:
        <br/>
        <input type="password" name="senha"/>
    </label>
    <br>
    <br>

    <input type="submit" value="Enviar"/>
</form>


    