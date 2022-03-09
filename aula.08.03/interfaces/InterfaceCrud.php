<?php

interface interfaceCrud{
    
    public function criar(array $dados):bool;

    public function apagar(int $int):bool;

    public function editar(int $id, array $dados):bool;

    public function listar(int $id = null): array;
    
}