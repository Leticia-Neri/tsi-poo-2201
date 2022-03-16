<?php
include('../classes/Cliente.php');


class main{

    private $cliente;
    //private $usuario;

    public function __construct(){

        $this->cliente = new Cliente();

        $this->cliente->acao([]);

        $this->cliente->excXpto();
      
      
    }

}

new Main();