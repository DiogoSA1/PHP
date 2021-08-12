<?php

session_start();

if (isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<form method="POST" action="index.php">
    <label>
        <br>
        Qual é o seu nome:
        <br>
        <input type="text" name="nome"/>
    </label>
    <br>
    <br>
    <input type="submit" value="Salvar"/>
</form>
