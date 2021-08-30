<?php 

require_once("Aluno.php");

class Tecnico extends Aluno {
    private $registroProfissional;
    
    public function renovarBolsa(){
       
    }
    public function pagarMensal(){
       
    }
   
    public function getregistroProfissional(){
        return $this->registroProfissional;
    }
    public function setregistroProfissional($re){
        $this->registroProfissional = $re;
    }
}