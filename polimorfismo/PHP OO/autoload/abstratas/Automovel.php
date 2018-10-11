<?php

interface Veiculo {

    public function acelerar ($velocidade);
    public function freiar ($velocidade);
    public function trocarMarcha ($marcha);

}

abstract class Automovel implements Veiculo {// a Classe abstrata serve para você definir o que vc
    // quer, porém uma classe abstraa não pode ser instanciada
public function acelerar ($velocidade){ // e as outras classes só podem extender uma classe abastrata
echo "O veiculo acelerou até " . $velocidade . "km/h";
}

public function freiar($velocidade){

}

public function trocarMarcha($marcha){

}

}
