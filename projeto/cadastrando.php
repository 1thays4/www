<html>
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <style type="text/css">
        <!--
        .style1 {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 10px;
            font-weight: bold;
            color: #0033CC;
        }
        -->
    </style>
</head>
<body><br>
<br>
<?
include("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$login = $_POST['senha'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];

#//Insere no banco de dados
$sql = mysqli_query($conexao, "INSERT INTO pessoas(nome, sobrenome, rg, cpf, email, sexo, pais, estado, cidade, login, senha) VALUES('$nome', '$sobrenome', '$rg', '$cpf', '$email', '$sexo', '$pais', '$estado', '$cidade', '$login', '$senha')") or die(mysqli_error($conexao));
echo $sql . "<br>";
?>


<div align="center" class="style1"><a href="index.php">RETORNAR</a> </div>
</body>
</html>