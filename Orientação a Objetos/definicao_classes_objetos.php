<?php 

// A definição de uma classe começa com a palavra chave class, seguida do nome da classe, seguido de um par de colchetes que englobam as definições de propriedades e métodos pertencentes à classe.

// O nome de uma classe tem de ser válido, que não seja uma palavra reservada do PHP. Um nome de classe válido começa com uma letra ou sublinhado, seguido de qualquer sequência de letras, números e sublinhados. Como uma expressão regular, pode ser expressada assim: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$.

// Uma classe pode conter suas próprias constantes, variáveis (chamadas de "propriedades") e funções (chamadas de "métodos").

// Variáveis membros de uma classe são chamadas "propriedades". Pode-se também observar serem referidas utilizando outros termos como "atributos" ou "campos", mas para o propósito desta referência, usaremos "propriedades". São definidas usando uma das palavras-chave public, protected, or private, seguidas de uma declaração normal de variável. Esta declaração pode incluir sua inicialização, porém esta inicialização deve ser um valor constante--isso é, deve ser possível avaliá-lo em tempo de compilação e não deve-se depender de informações de tempo de execução.
class Post {
    // public => declaração de propriedade publica
    public int $likes = 0;
    // public => declaração de propriedade privada
    public  array $comments = [];
    // public => declaração de propriedade protegida
    public string $author;


    public function __construct($qtdlikes = 0) {
        $this->likes = $qtdlikes;
    }

    //Criando método publico
    public function aumentarLike() {
        $this -> likes++;
    }

}

// Para criar uma instância de uma classe, a instrução new deve ser utilizada. Um objeto sempre será criado a não ser que a classe tenha um construtor definido que dispare uma exceção em caso de erro. Classes devem ser definidas antes de instanciadas (e em alguns casos isso é obrigatório).

// new => criação de novo objeto
$post1 = new Post(25);

// new => criação de novo objeto
$post2 = new Post(0);


echo "POST 1: ".$post1 -> likes."</br>";
echo "POST 2: ".$post2 -> likes."</br>";



