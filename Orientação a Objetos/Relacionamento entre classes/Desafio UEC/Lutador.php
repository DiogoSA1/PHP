<?php

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

    private function getNome(){
        return $this->nome;
    }
    private function setNome($no) {
        $this->nome = $no;
    }
    private function getNacionalidade(){
        return $this->nacionalidade;
    }
    private function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }
    private function getIdade(){
        return $this->idade;
    }
    private function setIdade($id) {
        $this->idade = $id;
    }
    private function getAltura(){
        return $this->altura;
    }
    private function setAltura($al) {
        $this->altura = $al;
    }
    private function getPeso(){
        return $this->peso;
    }
    private function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }
    private function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria() {
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
        echo " Lutador: ".$this->getNome().", ";
        echo " Origem: ".$this->getNacionalidade().", ";
        echo " Idade: ".$this->getIdade()." anos, ";
        echo " Altura: ".$this->getAltura()."m de Altura, ";
        echo " Peso: ".$this->getPeso()."Kg, ";
        echo " Ganhos: ".$this->getVitorias().", ";
        echo " Perdas: ".$this->getDerrotas().", ";
        echo " Empates: ".$this->getEmpates().", ";

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
