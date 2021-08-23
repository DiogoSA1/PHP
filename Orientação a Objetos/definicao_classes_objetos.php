<?php 

// class define os atributos e métodos comuns que serão compartilhados por um objeto.
class Post {
    // ATRIBUTOS
    // atributo publico => qualquer objeto fora da classe tera acesso.
    public int $likes = 0;
    // atributo privado => somente é visivel dentro da classe.
    private array $comments = [];
    // atributo protegido => atributo somente visivel para quem for da familia, ou seja filhos.
    protected string $author;

    // MÉTODOS
    // método publico
    public function aumentarLike() {
        $this -> likes++;
    }
    // método privado
    private function setAuthor($n) {
        if(strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
    }
    //método protegido
    protected function getAuthor() {
        return $this->author ??'Visitante';
    }

}

// INSTANCIAMENTO DE UM OBJETO COM NEW
// novo objeto $post1 criado a partir da classe Post
$post1 = new Post();
// atributo likes recebe valor 1 
$post1->likes = 5;
// no objeto $post2 criado a partir da classe Post
$post2 = new Post();
// atributo likes recebe valor 2
$post2->likes = 10;

echo "POST 1: ".$post1 -> likes."</br>";
echo "POST 2: ".$post2 -> likes."</br>";

// CURSO EM VIDEO

// Nova classe Caneta
class Caneta {
    
    // ATRIBUTOS
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    // MÉTODOS
    public function rabiscar() {
        if ($this->tampada == true){
            echo " A caneta esta tampada... </br>";
        } else {
            echo "estou rabiscando... </br>";
        }
        
    }
    public function tampar() {
        $this->tampada = true;
    }
    public function destampar() {
        $this->tampada = false;
        
    }

}

// novo objeto $c1 criado a partir da classe Caneta
$c1 = new Caneta;
$c1->modelo = "BIC Cristal";
$c1->cor = 'Azul';
//$c1->ponta = 0.5;
//$c1->tampada = true;

$c1->tampar();
$c1->rabiscar();
echo "<pre>";
print_r($c1);
echo "</pre>";

// MÉTODOS GETTERS E SETTERS
class Controle {

    public $cor;
    private $peso;

    public function getCor(){
        return $this->cor;
    }
    public function setCor($c){
        $this->cor = $c;
    }
    public function getPeso(){
        return this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
    }
}
$controle = new Controle;
$controle->setCor('Azul');
$controle->setPeso(10);

echo "<pre>";
print_r($controle);
echo "</pre>";

// MÉTODO CONSTRUCTOR
class Aula {
    public $qtdAlunos;
    public $qtdHoras;

    public function getAlunos(){
        return $this->qtdAlunos;
    }
    public function setAlunos($a){
        $this->qtdAlunos = $a;
    }
    public function getHoras(){
        return $this->qtdHoras;
    }
    public function setHoras($h){
        $this->qtdHoras = $h;
    }
    // function __Construct 
    public function __Construct($a, $h) {
        $this->setAlunos($a);
        $this->setHoras($h);
    }
}

$aula = new Aula(25, 32);
$aula1 = new Aula(10,26);
// $aula->getAlunos=10;
// $aula->getHoras=26;

echo "<pre>";
print_r($aula);
print_r($aula1);
echo "</pre>";