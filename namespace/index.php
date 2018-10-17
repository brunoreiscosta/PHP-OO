<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro ();

$cad->setNome("Bruno Angeoletto");
$cad->setEmail("bruno_angeoletto@hotmail.com");
$cad->setSenha("123456");

//echo $cad; // o echo só funciona, por que na classe Cadastro existe um metodo to String e 
            // no nosso caso ele retorna um json;
$cad->registrarVenda();