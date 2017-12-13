<html>
<head>
<title>Cadastrando...</title>
</head>

<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

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
$sql = mysql_query("INSERT INTO pessoas(nome, sobrenome, rg, cpf, email, sexo, pais, estado, cidade, login, senha) 
VALUES('$nome', '$sobrenome', '$rg', '$cpf', '$email', '$sexo', '$pais', '$estado', '$cidade', '$login', '$senha')");
echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";
?>
<br>
	<a href="logout.php"> Sair</a>
</body>
</html>