<?php

class Banco {
    public $numConta;
    public $tipo;
    public $dono;
    public $saldo;
    public $status;

    public function getNumConta(){
        return $numConta;
    }
    public function setNumConta($nc){
        $this->numConta = $nc;
    }
    public function getTipo(){
        return $tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $status;
    }
    public function setStatus($st){
        $this->status = $st;
    }

    public function abrirConta(){
        
    }
    public function fecharConta(){

    }
    public function depositar(){

    }
    public function sacar(){

    }
    public function pagarMensal(){

    }

}