<?php

require_once ("Animal.php");

class Mamifero extends Animal {
    protected $corPelo;

    public function emitirSom(){
        echo "Som de Mamifero<br>";
    }

    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($cp){
        $this->corPelo = $cp;
    }
}