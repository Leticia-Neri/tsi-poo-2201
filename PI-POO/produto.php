<?php
require('produtoClass.php');

$produto = new Produto($bd);
$produto->listar();



