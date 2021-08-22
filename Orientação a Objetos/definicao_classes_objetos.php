<?php 


class Post {
    // public => declaração de propriedade publica
    public int $likes = 0;
    // public => declaração de propriedade privada
    public  array $comments = [];
    // public => declaração de propriedade protegida
    private string $author;


   
    public function aumentarLike() {
        $this -> likes++;
    }

    public function setAuthor($n) {
        if(strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
    }
    public function getAuthor() {
        return $this->author ??'Visitante';
    }

}

// Para criar uma instância de uma classe, a instrução new deve ser utilizada. Um objeto sempre será criado a não ser que a classe tenha um construtor definido que dispare uma exceção em caso de erro. Classes devem ser definidas antes de instanciadas (e em alguns casos isso é obrigatório).

// new => criação de novo objeto
$post1 = new Post();
$post1->setAuthor('pi');
// new => criação de novo objeto
$post2 = new Post();
$post2->setAuthor('Fulano');

echo "POST 1: ".$post1 -> getAuthor()."</br>";
echo "POST 2: ".$post2 -> getAuthor()."</br>";



