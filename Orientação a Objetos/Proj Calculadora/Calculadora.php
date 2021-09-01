<?php 

class Calculadora {
    
    private $tot;

    public function __construct(){
        $this->setTot(0);
    }

    public function add($add){
        $this->setTot($this->getTot() + $add);
    }
    public function sub($sub){
        $this->setTot($this->getTot() - $sub);
    }
    public function mutiply($mul){
        $this->setTot($this->getTot() * $mul);
    }
    public function divide($div){
        $this->setTot($this->getTot() / $div);
    }
    public function total(){
        return $this->getTot();
    }
    public function clear(){
        return $this->setTot(0);
    }

    public function getTot(){
        return $this->tot;
    }
    public function setTot($t){
        $this->tot = $t;
    }

    

}