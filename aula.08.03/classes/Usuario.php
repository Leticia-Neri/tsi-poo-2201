<?php
chdir(__DIR__);
require_once '../interfaces/interfaceCrud.php';
require_once '../interfaces/interfaceUsuario.php';

class Usuario implements InterfaceCrud, InterfaceUsuario {

    private $email;
    private $nome;
    private $id;
    private $senha;
    private $id_perfil;

    
    public function setId($val){
        $this->id = $val;
    }

    public function getId(){
        return $this->id;
    }
    public function setNome($val){
        $this->nome = $val;
    }
    public function getSenha(){
        return $this->senha;
    }

   
    public function setDescricao($val){
        $this->descricao = $val;
    }

    public function getId_perfil(){
        return $this->permissoes;
    }
    public function setId_perfil($val){
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

    public function acao(array $idProdutos):bool{
        return [];
    }

}