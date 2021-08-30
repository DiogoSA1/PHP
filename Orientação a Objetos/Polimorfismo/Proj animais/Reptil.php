<?php 

require_once "Animal.php";

class Reptil extends Animal {
    private $corEscama;

    public function locomover(){
        echo "Rastejando<br>";
    }
    public function alimentar(){
        echo "Comendo Vegetais<br>";
    }
    public function emitirSom(){

        echo "som de Réptil<br>";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($ce){
        $this->corEscama = $ce;
    }


}