<?php

require_once("Video.php");
require_once("Gafanhoto.php");

class Visualizacao {

    private $espectador;
    private $filme;

    public function __Construct($es, $fi){
        $this->setEspectador($es);   
        $this->setFilme($fi);
        $this->filme->setViews($this->filme->getViews() + 1);   
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);   
          
    }

    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($es){
        $this->espectador = $es;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($fi){
        $this->filme = $fi;
    }
}