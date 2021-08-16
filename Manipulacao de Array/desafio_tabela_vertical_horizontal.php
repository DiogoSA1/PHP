<?php
$array = [
    'Nome' => 'Diogo Albuquerque',
    'Idade' => 26,
    'Empresa' => 'Anônima',
    'Cor' => 'Azul',
    'Profissão' => 'Programador'
];
?>


<?php
//  <table border="1"> => tag html para criar uma tabela com borda de 1 px 
//  <?php foreach($array as $chave => $valor): loop para percorrer o array
/*
// <tr> => tag html para criar linhas
// <th> => tag html para criar coluna principal em negrito
// <td> => tag html para criar colunas
<tr>
    <td><?php echo $chave; ?></td>
    <td><?php echo $valor; ?></td>
</tr>
*/
// <?php endforeach; => termina o loop de preenchimento da tabela

?>

<table border="1">
    <tr>
    <?php foreach($array as $chave => $valor): ?>
        <th><?php echo $chave; ?></th>
    <?php endforeach; ?>
    </tr>
    
    <tr>
    <?php foreach($array as $chave => $valor): ?>
        <td><?php echo $valor; ?></td>
    <?php endforeach; ?>
    </tr>

</table>