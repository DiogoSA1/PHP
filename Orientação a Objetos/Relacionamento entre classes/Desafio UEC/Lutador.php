<?php

require_once("Luta.php");

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function getNome(){
        return $this->nome;
    }
    function setNome($no) {
        $this->nome = $no;
    }
    function getNacionalidade(){
        return $this->nacionalidade;
    }
    function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }
    function getIdade(){
        return $this->idade;
    }
    function setIdade($id) {
        $this->idade = $id;
    }
    function getAltura(){
        return $this->altura;
    }
    function setAltura($al) {
        $this->altura = $al;
    }
    function getPeso(){
        return $this->peso;
    }
    function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "INVALIDO ";
        }else if ($this->getPeso() <= 70.3){
            $this->categoria = "LEVE ";   
        }else if ($this->getPeso() <= 83.9){
            $this->categoria = "MÉDIO ";   
        }else if ($this->getPeso() <= 120.2){
            $this->categoria = "PESADO ";   
        }else{
            $this->categoria = "INVALIDO ";   
        }
    }
    private function getVitorias(){
        return $this->vitorias;
    }
    private function setVitorias($vi) {
        $this->vitorias = $vi;
    }
    private function getDerrotas(){
        return $this->derrotas;
    }
    private function setDerrotas($de) {
        $this->derrotas = $de;
    }
    private function getEmpates(){
        return $this->empates;
    }
    private function setEmpates($em) {
        $this->empates = $em;
    }

    public function apresentar(){
        echo " Lutador: ".$this->getNome().", <br>";
        echo " Origem: ".$this->getNacionalidade().",  <br>";
        echo " Idade: ".$this->getIdade()." anos,  <br>";
        echo " Altura: ".$this->getAltura()."m de Altura,  <br>";
        echo " Peso: ".$this->getPeso()."Kg,  <br>";
        echo " Ganhos: ".$this->getVitorias().",  <br>";
        echo " Perdas: ".$this->getDerrotas().",  <br>";
        echo " Empates: ".$this->getEmpates().",  <br> <br>";

    }
    public function status(){
        echo $this->getNome();
        echo " é um peso ".$this->getCategoria();
        echo $this->getVitorias()." Vitórias ";
        echo $this->getDerrotas()." Derrotas ";
        echo $this->getEmpates()." Empates ";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function __Construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }
    

}
