<?php

spl_autoload_register(function($nomeClasse){

    if (file_exists($nomeClasse. ".php") === true) {
        require_once($nomeClasse. ".php");
    }
}
);

spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});

/** a Classe spl_atoload_register é para carregar outras classes todas as vezes que instanciamos um objeto
 * Exemplo disso é quando precisamos instaciar muitas classes e para não ficar '10' require once
 * no arquivo a classe autoload faz isso por nós**/

 $carro = new DelRay();
 $carro->acelerar(80);