<?php
chdir(__DIR__);
require_once '../interfaces/interfaceCrud.php';

class Perfil implements InterfaceCrud{

    private $id;
    private $nome;
    private $descricao;
    private $permissoes;


    public function setId($val){
        $this->id = $val;
    }

    public function getId(){
        return $this->id;
    }
    public function setNome($val){
        $this->nome = $val;
    }
    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($val){
        $this->descricao = $val;
    }

    public function getPermissoes(){
        return $this->permissoes;
    }
    public function setPermissoes($val){
        $this->descricao = $val;
    }

    public function criar (array $dados):bool{
        echo "\nperfil criado";
        return true;
    }
    public function apagar(int $int):bool{
        echo "\nperfil atualizado $id\n";
        return true;
    }
    public function editar (int $id, array $dados):bool{
        echo "\nperfil deletado";
        return true;
    }

    public function listar(int $id = null): array{
        echo "\nperfil listando";
        return[];
    }

}

