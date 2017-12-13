<?php
include_once("class/produto.class.php");
//Criando e Instanciando o objeto
$oProduto               = new Produto;
//Atribuindo valores ao objeto
$oProduto->codigo_barra = $_POST["codigo_barra"];
$oProduto->produto      = $_POST["produto"];
//chamando a funcao que faz o insert
$oProduto->setProduto();
echo "Produto ". $_POST["produto"] . " cadastrado com sucesso!";
?>