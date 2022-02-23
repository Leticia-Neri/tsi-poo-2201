<?php

interface User {

    public function seLogar();
    public function apagar();
}

class Usuario implements User{

    protected $nome = 'Letícia';
    private $email;
    private $nasc;

    public function seLogar(){
        echo "Logado";
    }
    public function seDeslogar(){
        echo "Tchau";
    }
    public function setNome($val){
        $this->nome = $val;
    }
    public function getNome(){
        return $this->nome;
    }
    public function apagar(){
        echo 'apagado';
    }
}

class Professor extends Usuario {  
    public function mudaNome(){
        $this->nome = 'Lima';
    }
}

class Turma{
    
    private $professor;

    public function setProfessor(Professor $prof){

        $this->professor = $prof;

    }
}

$leticia = new Professor;
$leticia->mudaNome();
echo $leticia->getNome();
$turma = new Turma;
$turma->setProfessor($leticia);