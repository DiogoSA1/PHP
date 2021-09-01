<?php

require_once("Pessoa.php");
require_once("Visualizacao.php");


class Gafanhoto extends Pessoa{

    private $login;
    private $totAssistido;

    public function __Construct($n, $i, $s, $l){
        parent::__Construct($n, $i, $s);
        $this->setLogin($l);
        $this->setTotAssistido(0);
    }

    public function assistirMaisUm(){
        $this->totAssistido ++;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($l){
        $this->login = $l;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($tt){
        $this->totAssistido = $tt;
    }
    

}