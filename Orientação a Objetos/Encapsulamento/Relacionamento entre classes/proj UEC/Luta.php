<?php

require_once("Lutador.php");

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiado($de){
        $this->desafiado = $de;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setDesafiante($df){
        $this->desafiante = $df;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setRounds($rd){
        $this->rounds = $rd;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($ap){
        $this->aprovada = $ap;
    }
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }

    }
    public function lutar(){
        if ($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor  = rand(0, 2);
            switch($vencedor) {
                case 0 :
                    echo 'Empatou!';
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1 :
                    echo "<p>".$this->getDesafiado()->getNome()." venceu !</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante() ->perderLuta();
                    break;
                case 2;
                    echo "<p>".$this->getDesafiante()->getNome()." venceu !</p>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
            }
        } else {
            echo "Luta não pode acontecer";
        }

    }
}