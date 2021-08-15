<?php
// O atributo enctype="multipart/form-data" => Especifica como os dados de formulário devem ser codificados ao submetê-los ao servidor.
// Formulario abaixo para envio de arquivos do tipo file
?>

<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="arquivo" />
    <input type="submit" value="Enviar" />
</form>
