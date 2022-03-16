<?php

chdir(__DIR__);
require_once '../interfaces/interfaceCrud.php';
require_once '../interfaces/interfaceUsuario.php';
class Categoria implements InterfaceCrud{
  
    private $id;
    private $nome;
  
    public function criar (array $dados):bool{
        echo "\nproduto criado";
        return true;
    }
    public function apagar(int $int):bool{
        echo "\nproduto atualizado $id\n";
        return true;
    }
    public function editar (int $id, array $dados):bool{
        echo "\nproduto deletado";
        return true;
    }

    public function listar(int $id = null): array{
        echo "\nproduto listando";
        return[];
    }
    



}