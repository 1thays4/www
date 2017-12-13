<?php
$host = "localhost";
$user = "id3322788_root";
$pass = 12345678;
$banco = "id3322788_cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<?php
/* define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
/* define o prazo do cache em 30 minutos */
session_cache_expire(180);
$cache_expire = session_cache_expire();
// Verificando se tem uma sessão aberta
session_start();
if (!isset($_SESSION["email"]) and !isset($_SESSION["senha"])) {
    header("Location: login.php");
    exit();
} else {
    echo "<center>Você está logado! :D </center>";
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file"/> <input
            type="submit" value="Enviar arquivo"/>
</form>
<form name="form1" method="post" action="pega_cadastro.php">
    <table width="50%" cellspacing="10" cellpadding="10" border="1">
        <tr>
            <td colspan="2" bgcolor="#f0f8ff"><h3><center>CADASTRO DE PRODUTOS</center></h3></td>
        </tr>
        <tr>
            <td width="208">Nome do Produto</td>
            <td width="282"><input name="nome" type="text" size="50"></td>
        </tr>
        <tr>
            <td width="208">Descrição do Produto</td>
            <td width="282"><input name="descricao" type="text" size="50"></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input name="quantidade" type="text" size="10"></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input name="preco" type="text" size="10"></td>
        </tr>
    </table>
    <p><input type="submit" value="Cadastrar" name="B1"><input type="reset" value="Redefinir"></p>
</form>
</body>
</html>