<?php
//conexão ao banco de dados, a inserção de dados fiz manualmente no banco
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<html>
<head>
<title>Autenticando usuário</title>
<script type="text/javascript">
//Redirecionando a página
function loginsuccessfully(){
setTimeout(function(){window.location.href='painel.php'}, 5000);
}
function loginfailed(){
setTimeout(function(){window.location.href='index.php'}, 5000);
}
</script>
</head>
<body>
<?php
//Fazendo a captura de dados
$email = $_POST['email'];
$senha = $_POST['senha'];
//Consulta de dados na base
$sql = mysql_query("SELECT * FROM pessoas WHERE email = '$email' and senha = '$senha'") or die(mysql_error());//avisa se ouver erro de código
//Conta quantas linhas tem no banco com os dados digitados no login
$row = mysql_num_rows($sql);
//Abrindo sessão para o usuário
if ($row > 0) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];
    echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
    echo "<script>loginsuccessfully()</script>";
} else {
    echo "<center>Nome de usuário ou senha inválidos! Aguarde um momento para tentar novamente.</center>";
    echo "<script>loginfailed()</script>";
}
?>
</body>
</html>