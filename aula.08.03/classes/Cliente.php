<?php
chdir(__DIR__);
require_once 'Usuario.php';
require_once '../interfaces/InterfaceUsuario.php';

class Cliente extends Usuario implements InterfaceUsuario{


    public function __construct(Produto $objProd = null){

        parent::__construct();

        echo"\nConstrutor da classe cliente";
    }

    public function excXpto(){
        $this->xpto();
    }
    public function acao(array $idProdutos):bool{
        echo"\nExecutou ação do cliente";
        return true;
    }

}