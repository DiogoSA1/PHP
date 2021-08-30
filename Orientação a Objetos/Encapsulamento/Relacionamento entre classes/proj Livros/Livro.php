<?php 

require_once("Pessoa.php");
require_once("publicacao.php");

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo "Livro ".$this->getTitulo()." escrito por ".$this->getAutor();
        echo "<br>Paginas: ".$this->getTotPaginas()." atual ".$this->getPagAtual();
        echo "<br>Sendo lido por ".$this->leitor->getNome();
    }
    public function __Construct($t, $at, $p, $l){
        $this->setTitulo($t);
        $this->setAutor($at);
        $this->setTotPaginas($p);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($l);
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($at){
        $this->autor = $at;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($p){
        $this->totPaginas = $p;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pa){
        $this->pagAtual = $pa;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($a){
        $this->aberto = $a;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($l){
        $this->leitor = $l;
    }
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setFechado(false);
    }
    public function folhear($f){
        if($f < $this->getTotPaginas()){
            $this->setPagAtual($f);
        }
    }
    public function avancarPagina(){
        $this->pagAtual ++;
    }
    public function voltarPagina(){
        $this->pagAtual --;
    }
}