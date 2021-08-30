<?php 

require_once "Animal.php";
require_once "Mamifero.php";

class Cachorro extends Mamifero {
    public function enterrarOsso(){
        echo "enterrando Osso<br>";
    }
    public function abanarRabo(){
        echo "Abanando Rabo<br>";
    }
}