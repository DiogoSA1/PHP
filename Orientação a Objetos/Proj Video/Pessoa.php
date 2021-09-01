<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    protected function ganharExp($n){
        $this->experiencia += $n;
    }
    public function __Construct($n,$i,$s){
    $this->setNome($n);
    $this->setIdade($i);
    $this->setSexo($s);
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }
    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($exp){
        $this->experiencia = $exp;
    }
}