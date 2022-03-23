<?php

require("connection/connectionFactory.php");

class Produto{

    private $nome;
    private $preco;
    private $descricao;
    private $quantidade;
    private $db;

    public function __construct($bd){
        $this->db = $bd;
    }

    public function create(){
 
        $_POST['nome'] = $_POST['nome'] ?? '';
        $_POST['preco'] = $_POST['preco'] ?? '';
        $_POST['desc'] = $_POST['desc'] ?? '';
        $_POST['quant'] = $_POST['quant'] ?? '';
        
        
        //chechar os campos obrigátorios
        if(empty($_POST['nome'] || $_POST['preco'] || $_POST['quant'])){
            die('ERRO! os campos são obriatórios');
        }
        
        //Preparamos a consulta para evitar SQL Injection
        $stmt = $this->db->prepare(" INSERT INTO produto
                                    (nome, preco, descricao, quantidade)
                                VALUES 
                                    (:nome, :preco, :descricao, :quantidade)");
        
        $valores[':nome'] = $_POST['nome'];
        $valores[':preco'] = $_POST['preco'];
        $valores[':descricao'] = $_POST['descricao'];
        $valores[':quantidade'] = $_POST['quant'];
        
        //Executamos a consulta SQL
        if( $stmt->execute($valores) ){
            header('Location: listarProdutos.php?gravado=1');
        } else {
            echo "<br><br> Não consegui gravar no banco :-(";
        }
    }
       
    public function listar(){

        $stmt= $this->db->query('SELECT id, nome, descricao, preco, quantidade FROM produto');
       
        $stmt->execute();
        $registros = $stmt->fetchAll();
        //echo "{$registros['nome']}";
        echo '<pre>';
        var_dump($registros[0]['descricao']);
        
    }
}