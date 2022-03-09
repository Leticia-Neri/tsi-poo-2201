<?php
chdir(__DIR__);
require_once 'Usuario.php';
require_once '../interfaces/InterfaceUsuario.php';

class Vendedor extends Usuario{

    public function acao(array $idProdutos):bool{
        echo"Executou ação do vendedor";
        return true;
    }
}