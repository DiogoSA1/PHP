<?php 

interface MatematicaBasica {
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica {
    public function somar($x, $y){
        return $x + $y;
    }
}
class Basico2 implements MatematicaBasica {
    public function somar($x, $y){
        $res = $x;
        for($q=0; $q<$y;$q++){
            $res++;
        }

        return $res;
    
    }
}

// ACOPLAMENTO
class Matematica {
    private $basico;

    public function __construct(){
        $this->basico = new Basico1();
    }

    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica();
echo$mat->somar(10, 15)."<br>"; 

// INJEÇÃO DE DEPENDENCIA
class Matematica1 {
    private $basico;

    public function __construct($b){
        $this->basico = $b;
    }
    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica1(new Basico2());
echo $mat->somar(10, 15);

//EXEMPLOS

interface DatabaseInterface {
    public function listar();
}

class Database {
    private $engine;

    public function __construct(DatabaseInterface $eng){
        $this->engine = $eng;
    }
    public function listarTudo(){
        return $this->engine->listar();
    }

}

class MysqlEngine implements DatabaseInterface{
    public function listar(){
        
    }
}
class OracleEngine implements DatabaseInterface{
    public function listar(){

    }
}
class MongoEngine implements DatabaseInterface{
    public function listar(){

    }
}

$db = new Database(new MysqlEngine());
$db->listarTudo(); 
