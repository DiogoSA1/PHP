<?php

class Matematica {

    public static string $nome = "Diogo";

    public static function somar($x, $y){
        return $x + $y;
    }
}

// Matematica::acessa o método ou atributo externamente sem criar um objeto.
echo Matematica::somar(5, 3) ."<br>";
echo Matematica::$nome;