<?php 

require_once "Animal.php";
require_once "Reptil.php";

class Tartaruga extends Reptil {
    public function locomover(){
        echo "Movendo-se devagar<br>";
    }
}