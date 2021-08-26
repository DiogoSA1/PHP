<?php

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    private function getDesafiado(){
        return $this->desafiado;
    }
    private function setDesafiado($de){
        $this->desafiado = $de;
    }
    private function getDesafiante(){
        return $this->desafiante;
    }
    private function setDesafiante($df){
        $this->desafiante = $df;
    }
    private function getRounds(){
        return $this->rounds;
    }
    private function setRounds($rd){
        $this->rounds = $rd;
    }
    private function getAprovada(){
        return $this->aprovada;
    }
    private function setAprovada($ap){
        $this->aprovada = $ap;
    }
}