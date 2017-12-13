<html>
<head>
<title>Cadastrando...</title>
</head>

<body>
<?php
$host = "localhost";
$user = "id3322788_root";
$pass = 12345678;
$banco = "id3322788_cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error($conexao));
mysqli_select_db($conexao, $banco) or die(mysqli_error($conexao));
?>

<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$login = $_POST['senha'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao, "INSERT INTO pessoas(nome, sobrenome, rg, cpf, email, sexo, pais, estado, cidade, login, senha) VALUES('$nome', '$sobrenome', '$rg', '$cpf', '$email', '$sexo', '$pais', '$estado', '$cidade', '$login', '$senha')") or die(mysqli_error($conexao));
echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";
?>
<br>
	<a href="logout.php"> Sair</a>
</body>
</html>