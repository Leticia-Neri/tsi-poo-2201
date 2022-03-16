<?php

include('../classes/Estoque.php');
include('../classes/Produto.php');


class Main{
    
    private $estoque;
    private $produto;
    
    public function __construct(){

        $this->produto = new Produto;

        $this->produto->criar(['melancia']);

        $this->estoque = new Estoque($this->produto);
        //$estoque->criar( ['teste', 'teste', '20', '2']);
        
    }

  

    public function __destruct(){

        echo"\n Destrutor Executando";
    }
}

new Main();

