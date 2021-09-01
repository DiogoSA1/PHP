<?php

require_once("AcoesVideos.php");

class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __Construct($t){
        $this->setTitulo($t);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);

    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setAvaliacao($av){
        $this->avaliacao = $av;
    }
    public function getViews(){
        return $this->views;
    }
    public function setViews($vw){
        $this->views = $vw;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($ct){
        $this->curtidas = $ct;
    }
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($rep){
        $this->reproduzindo = $rep;
    }
    public function play(){
        $this->setreproduzindo(true);
    }
    public function pause(){
        $this->setreproduzindo(false);
    }
    public function like(){
        $this->curtidas ++;

    }
}