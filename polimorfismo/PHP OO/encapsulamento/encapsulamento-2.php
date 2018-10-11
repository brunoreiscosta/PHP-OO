<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";// public qulquer um pode ter acesso.
    protected $idade = 48; //Protected somente a a propia classe e herdeiros
    private $senha = "123456";//Private somente a propia classe pode ter acesso.

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
    
}

class Programador extends Pessoa {

    public function verDados(){
        
        echo get_class($this) . "<br>"; //Essa função é para saber de qual classe essa função está sendo usada

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

$objeto = new Programador();
//echo $objeto->nome;

$objeto->verDados();