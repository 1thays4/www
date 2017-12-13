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
    header("Location: teste.php");
    exit();
} else {
    echo "<center>Você está logado! :D </center>";
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link href="../Thays%20-%20Entregar/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form name="form1" method="post" action="../Thays%20-%20Entregar/pega_cadastro.php">
    <table align="center" width="50%" cellspacing="10" cellpadding="10" border="1">
        <tr>
            <td colspan="2" bgcolor="#f0f8ff"><h3><center>CADASTRO DO CLIENTE</center></h3></td>
        </tr>
        <tr>
            <td width="5%">Nome:</td>
            <td width="87%"><input type=text name="nome" size="25"></td>
        </tr>
        <tr>
            <td>Sobrenome:</td>
            <td><input type=text name="sobrenome" size="25"></td>
        </tr>
        <tr>
            <td>RG:</td>
            <td><input type=text name="rg" size="25"></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input type=text name="cpf" size="25"></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type=text name="email" size="25" maxlength="50"></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><input type=radio name="sexo" value="F" checked>Feminino <input
                        type=radio name="sexo" value="M" checked>Masculino</td>
        </tr>
        <tr>
            <td>País:</td>
            <td><input type=text name="pais" size="25"></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td><input type=text name="estado" size="25"></td>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td><input type=text name="cidade" size="25"></td>
        </tr>
        <tr>
            <td>Login:</td>
            <td><input type=text name="login" size="25"></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><input type=password name="senha" size="25"></td>
        </tr>
        <tr>
            <td><input type=submit value="Enviar"></td>
            <td><input type=reset value="Limpar"></td>
    </table>
    <p><input type="submit" value="Cadastrar" name="B1"><input type="reset" value="Redefinir" align="center"></p>
</form>
<br>
<a href="../Thays%20-%20Entregar/logout.php"> SAIR</a>
</body>
</html>