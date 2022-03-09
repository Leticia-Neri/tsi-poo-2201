<?php

class Sessao{

    private $id;
    private $id_usuario;
    private $disposivito;
    private $localizacao;
    private $ult_atualizacao;

    public function login(){

        echo "Login efetuado";

    }

    public function destruir(){
         
        echo "Sessão destruída";
    }

    public function logout(){

        echo "Logout efetuado";
    }

    public function atualizar(){

        echo "Sessão efetuada";

    }
    
  
}