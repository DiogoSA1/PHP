<?php 

require_once "Animal.php";

class Peixe extends Animal {
    private $corEscama;

    public function soltarBolha(){
        echo "soltando Bolha<br>";
    }
    public function locomover(){
        echo "Nadando<br>";
    }
    public function alimentar(){
        echo "Comendo Subsâncias<br>";
    }
    public function emitirSom(){

        echo "Peixe não faz som<br>";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($ce){
        $this->corEscama = $ce;
    }

}