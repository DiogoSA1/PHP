<?php 

require_once("Aluno.php");

class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
       echo "Bolsa renovada <br>";
    }

    //@Sobreposição de método
    public function pagarMensal(){
       
    }
   
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($b){
        $this->bolsa = $b;
    }
   
}