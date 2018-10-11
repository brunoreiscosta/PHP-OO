<?php
// Interfaces são regras para outras classes que as implementaram, exemplo:
// quando o usuario pegar essa interface ele irá saber que aclasse que irá implementa-la,
// terá que conter o que foi declarado na interface, ex: esses 3 metodos.
interface Veiculo {

    public function acelerar ($velocidade);
    public function freiar ($velocidade);
    public function trocarMarcha ($marcha);

}

class Civic implements Veiculo {// repare que nesta classe que implementa veiculo usamos os 3 metodos

    public function acelerar ($velocidade){
        echo "O veiculo acelerou até " . $velocidade . "km/h";
    }

    public function freiar($velocidade){

    }

    public function trocarMarcha($marcha){

    }

}

$carro = new Civic();

$carro->acelerar(100);