<?php

require_once("Controller.php");

class ControleRemoto implements Controller {
   
    private $volume;
    private $ligado;
    private $tocando;

    public function __Construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    private function getVolume(){ 
        return $this->volume;
    }
    private function setVolume($vl){
        $this->volume = $vl;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($lg){
        $this->ligado = $lg;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tc){
        $this->tocando = $tc;
    }

    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo ($this->getLigado())?"<p>Esta ligado: SIM"."</p>":"<p>Esta ligado: NÃO"."</p>";
        echo ($this->getTocando())?"<p> Esta Tocando: SIM"."</p>":"<p> Esta Tocando: NÃO"."</p>";
        echo "<p>Volume: ".$this->getVolume()."</p>";
        for ($i = 0; $i <= $this->getVolume(); $i += 1){
            echo "|";
        };
        echo "<br>";
    }
    public function fecharMenu(){
        echo "Fechar Menu";
    }
    public function maisVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }

    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
    
}