<?php
/* define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
/* define o prazo do cache em 30 minutos */
session_cache_expire(180);
$cache_expire = session_cache_expire();
session_start();
// conexão ao banco de dados, a inserção de dados fiz manualmente no banco
$host = "localhost";
$user = "id3322788_root";
$pass = 12345678;
$banco = "id3322788_cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<html>
<head>
<title>Autenticando usuário</title>
    <meta charset="UTF-8">
<script type="text/javascript">
//Redirecionando a página
function loginsuccessfully(){
setTimeout(function(){window.location.href='../teste/teste.php'}, 5000);
}
function loginfailed(){
setTimeout(function(){window.location.href='login.php'}, 5000);
}
</script>
</head>
<body>
<?php
// Fazendo a captura de dados
$email = $_POST['email'];
$senha = $_POST['senha'];
// Consulta de dados na base
$sql = mysqli_query($conexao, "SELECT * FROM pessoas WHERE email = '$email' and senha = '$senha'") or die(mysqli_error()); // avisa se ouver erro de código         
// Conta quantas linhas tem no banco com os dados digitados no login
$row = mysqli_num_rows($sql);
// Abrindo sessão para o usuário
if ($row > 0) {
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