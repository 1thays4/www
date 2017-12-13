<?php
include 'conexao.php';
$sqli = "select * from produtos where codigo = 2";
$resultado = mysqli_query($conexao, $sqli);
$dados = mysqli_fetch_array($resultado);
$nome = $dados["nome"];
$descricao = $dados['descricao'];
$quantidade = $dados['quantidade'];
$preco = $dados['preco'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Lista Produtos
    </title>
</head>
<body>
<h1>Listagem de Produtos</h1>
<?php
echo "Nome do produto: $nome <br>
Descrição: $descricao <br>
Quantidade: $quantidade<br>
Preço: $preco";
?>
</body>
</html>