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

$objeto = new Pessoa();
//echo $objeto->nome;

$objeto->verDados();