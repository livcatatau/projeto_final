<?php
require "../model/CategoriaModel.php";

$categoria = new CategoriaModel();
$categoria->inserir("Produtos de Limpeza");
$categoria->excluir(1);
$categoria->atualizar(1, "Alvejante");
var_dump($categoria->buscarPorId(60));
var_dump($categoria->buscarTodo());