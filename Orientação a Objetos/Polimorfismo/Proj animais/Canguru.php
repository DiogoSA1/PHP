<?php 

require_once "Animal.php";
require_once "Mamifero.php";

class Canguru extends Mamifero {
    public function usarBolsa(){
        echo "Usando Bolsa<br>";
    }
    public function locomover(){
        echo "Locomovendo<br>";
    }

}