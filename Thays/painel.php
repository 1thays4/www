<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<?php
// Verificando se tem uma sess�o aberta
session_start();
if (!isset($_SESSION["email"]) and !isset($_SESSION["senha"])) {
    header("Location: login.php");
    exit();
} else {
    echo "<center>Voc� est� logado! :D </center>";
}
?>
<?php
// Tamanho m�ximo do arquivo em bytes
$maximo = 50000;
// Verifica��o
if ($_FILES["arquivo"]["size"] > $maximo) {
    echo "Erro! O arquivo enviado por voc� ultrapassa o ";
    echo "limite m�ximo de " . $maximo . " bytes! Envie outro arquivo";
}
?>
<html>
<head>
    <title>Painel</title>
</head>
<body>
<form method="post" action="upload.php" enctype="multipart/form-data">
    <label>Arquivo</label>
    <input type="file" name="arquivo"/>
    <input type="submit" value="Enviar"/>
</form>
<a href="logout.php"> Sair</a>
</body>
</html>