<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

// foreach($ingredientes as $ingrediente){
//     echo "item :".$ingrediente."<br/>";
// }

// foreach($ingredientes as $chave => $valor){
//     echo "Item ".$chave.": ".$valor."<br/>";
// }

// foreach($ingredientes as $chave => $valor){
//     echo "Item ".($chave + 1).": ".$valor."<br/>";
// }

echo '<h2>Ingredientes</h2>';

echo '<ul>';

foreach($ingredientes as $valor){
    echo '<li>'.$valor.'</li>';
}

echo '</ul>';