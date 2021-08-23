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

