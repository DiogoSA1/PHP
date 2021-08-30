<?php 

require_once "Animal.php";

class Ave extends Animal {
    private $corPena;

    public function fazerNinho(){
        echo "Fazendo Ninho<br>";
    }
    public function locomover(){
        echo "Voando<br>";
    }
    public function alimentar(){
        echo "Comendo frutas<br>";
    }
    public function emitirSom(){

        echo "som de Ave<br>";
    }

    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($cpn){
        $this->corPena = $cpn;
    }

}