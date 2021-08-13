<?php

session_start();

setcookie('nome', '', time() - 3600);

if (isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
    
}

?>

<form method="POST" action="validacao.php">
    <label>
        <br>
        Novo nome:
        <br>
        <input type="text" name="nome"/>
    </label>
    <br>
    <br>
    <input type="submit" value="Adicionar"/>

</form>

<br>
<h1>Lista de nomes</h1>
<br/>

<?php 

$lista = file_get_contents('lista.txt');
echo $lista;

