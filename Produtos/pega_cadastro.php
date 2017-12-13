<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: THAYS
 * Date: 15/11/2017
 * Time: 12:56
 */
include 'conexao.php';

$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sqli_cadastra = mysqli_query($conexao, "INSERT INTO produtos(descricao, quantidade, preco) value ('$descricao', '$quantidade', '$preco')") or die(mysqli_error($conexao));
echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";

?>
<a href="logout.php"> Sair</a>
</body>
</html>


