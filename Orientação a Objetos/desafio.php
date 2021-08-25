<?php

class ContaBanco {
    public int $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ( $t == 'CC') {
            $this->setSaldo(50);
        } else if ($t == 'CP') {
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Você precisar sacar seu dinheiro antes de fechar a conta</p>";
        } else if ($this->getSaldo() < 0) {
            echo "<p>Você esta em débito com o banco, quite seu débito para fechar</p>";
        } else {
            $this->setStatus(false);
            echo "Conta fechada com sucesso";
        }
    }
    public function depositar($dp){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $dp);
            echo "<p>Depósito de R$ $dp autorizado na conta de ".$this->getDono()."</p>";
        } else {
            echo "<p>Abra primeiro uma conta</p>";
        }
    }
    public function sacar($sc){
        if($this->getStatus()){
            if ($this->getSaldo() >= $sc){
                $this->setSaldo($this->getSaldo() - $sc);
                echo "<p>Saque de R$ $sc autorizado na conta de ".$this->getDono()."</p>";
            } else {
                echo '<p>Saldo Insuficiente para saque</P>';
            }
        } else {
            echo '<p>A conta não existe</p>';
        }
    }
    public function pagarMensal(){
        $m = 0;
        if ($this->getTipo() == 'CC') {
            $m = 12;
        } else if ($this->getTipo() == 'CP') {
            $m = 20;
        }
        if ($this->getStatus()) {
            if($this->getSaldo() > $m) {
                $this->setSaldo($this->getSaldo() - $m);
                echo "<p>Mensalidade de R$ $m debitada na conta de ".$this->getDono()."</p>";
            } else { 
                echo '<p>Saldo Insuficiente</p>';
            }
        } else {
            echo '<p>A conta não existe</p>';
        }
    }

    public function __Construct(){
        $this->setStatus(false);
        $this->setSaldo(0);
        echo "<p>Conta criada com sucesso</p>";
    }
    
        public function getNumConta(){
            return $this->numConta;
        }
        public function setNumConta($nc){
            $this->numConta = $nc;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setDono($d){
            $this->dono = $d;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($st){
            $this->status = $st;
        }
}

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1->abrirConta("CC");
$p1->setDono("Diogo");
$p1->setNumConta(1111);
$p1->depositar(300);
$p1->pagarMensal();
$p1->sacar(400);
$p1->sacar(338);
$p1->fecharConta();


$p2->abrirConta("CP");
$p2->setDono("Lucas");
$p2->setNumConta(2222);
$p2->depositar(500);
$p2->sacar(100);
$p2->pagarMensal();
$p2->sacar(530);
$p2->fecharConta();


echo "<pre>";
print_r($p1);
echo "</pre>";

echo "<pre>";
print_r($p2);
echo "</pre>";



