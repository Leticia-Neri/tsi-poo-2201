<?php

interface User{

    public function seLogar();
}

class Usuario implements User{

    private $nome = 'Leticia';
    private $email;
    private $nasc;

    public static function seLogar(){

        echo "Logado";
    }

    public function seDesLogar(){
        echo "Tchau";
    }

    public function setNome($val){

        $this->nome = $val;

    }


}
    $leticia = new Usuario;

   // $leticia->seLogar();

    //$leticia->setNome("Raissa");


    //static 
    Usuario::seLogar();
