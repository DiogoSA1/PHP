<?php

require_once ("Animal.php");
require_once ("Mamifero.php");

class Cachorro extends Lobo {

    public function emitirSom(){
        echo "Au! Au! Au!<br>";
    }
    public function reagirFrase($frase){
        if($frase == "Toma Comida" || $frase == "Olá"){
            echo "Abanando e Latindo<br>";
        } else {
            echo "Rosnando<br>";
        }
    }
    public function reagirHora($hora, $min){
        if($hora<12) {
            echo "Abanar<br>";
        } else if ($hora >= 18){
            echo "Ignorar<br>";
        } else {
            echo "Abanar e latir<br>";
        }
    }
    public function reagirDono($dono){
        if ($dono){
            echo "Abanando<br>";
        } else {
            echo "Rosnar e Latir<br>";
        }
    }
    public function reagirIdade($idade, $peso){
        if ($idade < 5){
            if ($peso < 10){
                echo "Abanar<br>";
            } else {
                echo "Latir<br>";
            }

        } else {
            if ($peso < 10){
                echo "Rosnar<br>";
            } else {
                echo "Ignorar<br>";
            }
        }
    }
}
