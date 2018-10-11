<?php

abstract class Animal {

    public function falar(){
        return "som";
    }

    public function mover(){
        return "anda";
    }
}

class Cachorro extends Animal {

    public function falar(){// como repararam temos os metodos com o mesmo nome na classe mãe
        return "Late";         // e nas classes filhas, pois quando chamarmos o metodo
    }                       // instanciando uma das classes filhas ele pegara a das classes filhas
}                           // isso se chama polimorfismo.

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){
        return "Canta";
    }

    public function mover (){

        return "Voa e " . parent::mover();//a palavra reservada parent, acessa de modo estatco
    }                                      // o metódo da classe mãe
}


$dog = new Cachorro();
echo $dog->falar(). "<br/>";
echo $dog->mover() . '<br/>';

$cat = new Gato();
echo $cat->falar(). "<br/>";
echo $cat->mover() .'<br/>';

$ave = new Passaro();
echo $ave->falar() . "<br/>";
echo $ave->mover();