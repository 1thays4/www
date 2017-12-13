<?php
include 'conexao.php';
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
    <table width="50%" cellspacing="10" cellpadding="10" border="1">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Quantidade</td>
            <td>Preço</td>
        </tr>
    <?php
    //consulta trazendo varias linhas de dados
    $sqli = "select * from produtos";
    //executa a consulta (select) do sql e guarda o retorno na variavel resultado
    $resultado = mysqli_query($conexao, $sqli);
    //transforma o resultado do sql em um array associativo e gurada na variavel dados

    //cria uma variavel php para utilizar cada dado vindo do array de campos
    while ($dados = mysqli_fetch_array($resultado)) {
        $codigo = $dados["codigo"];
    $nome = $dados["nome"];
    $descricao = $dados['descricao'];
    $quantidade = $dados['quantidade'];
    $preco = $dados['preco'];

    echo " <tr>
             <td>$codigo</td>
            <td>$nome</td>
            <td>$descricao</td>
            <td>$quantidade</td>
            <td>$preco</td>
        </tr>";
}
?>
</table>
</body>
</html>