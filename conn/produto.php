<?php
include("class\produto.class.php");
//Criando e Instanciando o objeto
$oProduto  = new Produto();
print_r($oProduto);
//Atribuindo valores ao objeto
$oProduto->codigo = $_POST["codigo"];
$oProduto->codigo_barra = $_POST["codigo_barra"];
$oProduto->nome = $_POST["nome"];
//echo '<hr>';
print_r($oProduto); exit;
//chamando a funcao que faz o insert
$oProduto->setProduto();
echo "Produto ". $_POST["nome"] . " cadastrado com sucesso!";
?>