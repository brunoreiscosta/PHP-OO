<?php

namespace Cliente; // espaço que estou utilizando .

class Cadastro extends \Cadastro  { // para voltar sempre usar contra barra, volta na raiz e pega
                                    // o Cadastro
    public function registrarVenda(){
        echo "foi registrada uma venda para o cliente" . $this->getNome();
    }
}