<?php
include 'conexao.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Lista Produtos
    </title>
    <?php
$Sugestao_preco = $_POST['Sugestao_preco'];
switch ($Sugestao_preco){
    case '1000';
    $string = 'WHERE Sugestao_preco < 1000';
    $msg = "Até R$ 1.000,00";
    break;
    case '2000';
    $string = 'WHERE Sugestao_preco BETWEEN 1001 AND 2000';
    $msg = "R$ 1.001,00 até R$ 2.000,00";
    break;
    case '3000';
    $string = 'WHERE Sugestao_preco BETWEEN 2001 AND 3000';
    $msg = "R$ 2.001,00 até R$ 3.000,00";
    break;
    case '4000';
    $string = 'WHERE Sugestao_preco > 3001';
    $msg = 'Acima de R$ 3.001,00';
    break;
    case '';
    $string = "";
    $msg = "";
    break;
}
?>
</head>
<body>
<div class "menu">
<form name="formCombo" action="" method="post" enctype="multipart/form-data">
    <select name="Sugestao_preco">
        <option value="">Selecione um valor</option>
        <option value="1000">Até R$ 1.000,00</option>
        <option value="2000">R$ 1001,00 até R$ 2.000,00</option>
        <option value="3000">R$ 2001,00 até R$ 3.000,00</option>
        <option value="4000">Acima de R$ 3.001,00</option>
    </select>
    <input type="submit" name="botao" value="Filtrar">
</form>
</div>
<?php
if (isset($msg)):
?>
<div class ="tag">
    <?= $msg;?>
</div>
<?php endif;?>
    <h1>Listagem de Produtos</h1>
    <table width="50%" cellspacing="10" cellpadding="10" border="1">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Image1</td>
            <td>Descrição</td>
            <td>Preço</td>
        </tr>
    <?php
    //consulta trazendo varias linhas de dados
    $sqli = "select * from produtos $string";
    //executa a consulta (select) do sql e guarda o retorno na variavel resultado
    $resultado = mysqli_query($conexao, $sqli) or die(mysqli_error($conexao));
    //transforma o resultado do sql em um array associativo e gurada na variavel dados

    //cria uma variavel php para utilizar cada dado vindo do array de campos
    while ($dados = mysqli_fetch_array($resultado)) {

        $codigo = $dados["codigo"];
        $nome = $dados["nome"];
        $Image1 = $dados['Image1'];
        $descricao = $dados['descricao'];
        $Sugestao_preco = $dados['Sugestao_preco'];

    echo " <tr>
             <td>$codigo</td>
            <td>$nome</td>
            <td>
            <img src=\"$Image1\" alt=\"Produto\">
            </td>
            <td>$descricao</td>
            <td>$Sugestao_preco</td>
        </tr>";
}
?>
</table>
</body>
</html>