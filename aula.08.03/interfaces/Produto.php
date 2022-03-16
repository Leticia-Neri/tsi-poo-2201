<?php

include('../classes/Produto.php');



class Main{
    
    private $produto;

    public function __construct(){

        $this->produto = new Produto();

        $vetor = [];         
        $this->novo($vetor);

        
    }

    function novo($vetor):void{

        if(is_array($vetor)){
            $this->produto->criar($vetor);
        }else{
            throw 'Erro';
        }
        
    }

    public function __destruct(){

        echo"\n Destrutor Executando";
    }
}

new Main;

/*
$produto = new Produto();

$array= ['teste', 'teste', '20', '2'];

$produto->criar($array);
$produto->apagar(2);
$produto->editar(2, $array);
$produto->listar();
*/