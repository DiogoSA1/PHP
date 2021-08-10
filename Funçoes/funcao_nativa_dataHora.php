<?php

// time() => exiibe o tempo percorrido em milisegundo desde a data 0 (01/01/1970)
echo time()."<br/>";

// date() => exibe a data Atual
echo date('d/m/Y')."<br/>";

// date() => exibe a data combinada com as Horas
echo date('d/m/Y H:i:s')."<br/>";

// Para mais variações consultar a documentação "php.net/manual/pt_BR/function.date.php"

// Padrão de data mais usada no Brasil
echo date('Y-m-d')."<br/>";

$data = '2021-08-10';

// strtotime() => transforma a data indicada em formato de time.
$time = strtotime($data);
echo $time."<br/>";

// date() => recebe como primeiro parametro o formato desejado e recebe como segundo parametro a variavel do time para transformar no formato indicado
echo date('d/m/Y', $time)."<br/>";

//formato simplificado
echo date('d/m/Y', strtotime($data));



