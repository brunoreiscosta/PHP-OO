<?php

class Endereco {
    
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){// o metodo construtor vai ser usado sempre que instanciar uma classe.

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }    

    /**
     * Get the value of logradouro
     */ 
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */ 
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cidade
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */ 
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function __toString(){

        return $this->logradouro.",".$this->numero." - ".$this->cidade;
    }
}
// no construct colocamos $a $b $c, então quando instanciamos um objeto temos que passar neste caso 3 paramtros
$meuEndereco = new Endereco ('Rua antoni marcon', '218', 'SBC');

print_r($meuEndereco);

//Quando usamos o toString ? Quando alguem dar um echo no objeto o toString mostra como ele deve ser printado. EX:
echo $meuEndereco;