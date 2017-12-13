<html>
<head>
    <title>Exibir dados com PHP/MySql</title>
    <meta charset="UTF-8">
    <style type="text/css">
        table{
            width:100%;
            border-collapse: separate;
            border-spacing: 15px;
        }
    </style>
</head>
<body>
<?php
include 'conexao.php';
//pegamos o id  da pagina editar.php pelo link

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
$id = $_POST['id'];
$sqli=mysqli_query($conexao,"
UPDATE pessoas 
SET 
nome='$nome', 
sobrenome='$sobrenome',
rg='$rg',
cpf='$cpf',
email='$email',
sexo='$sexo',
pais='$pais',
estado='$estado', 
cidade='$cidade', 
login='$login', 
senha='$senha'
WHERE id='$id'
") or die(mysqli_error($conexao));

if($sqli==true)
{
    echo"Dados Atualizados com Sucesso";
}
else
{
    echo"Erro ao Atualizar";
}

?>
<?php echo "<a href='salvar.php?id=". $row['id'] ."> Editar </a>"; ?>
<form method="post" action="editar.php">

    <table>
        <tr>
            <td width="5%">Nome:</td>
            <td width="87%"><label>
                    <input type=text name="nome" size="25" value="<?php print $nome; ?>"
                </label></td>
        </tr>
        <tr>
            <td>Sobrenome:</td>
            <td><label>
                    <input type=text name="sobrenome" size="25" value="<?php print $sobrenome; ?>"
                </label></td>
        </tr>
        <tr>
            <td>RG:</td>
            <td><label>
                    <input type=text name="rg" size="25" value="<?php print $rg; ?>"
                </label></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><label>
                    <input type=text name="cpf" size="25" value="<?php print $cpf; ?>"
                </label></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><label>
                    <input type=text name="email" size="25" maxlength="50" value="<?php print $email; ?>"
                </label></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><label>
                    <input type=radio name="sexo" value="F" checked>
                </label>Feminino
                <label>
                    <input type=radio name="sexo" value="M" checked>
                </label>Masculino</td>
        </tr>
        <tr>
            <td>País:</td>
            <td><label>
                    <input type=text name="pais" size="25" value="<?php print $pais; ?>"
                </label></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td><label>
                    <input type=text name="estado" size="25" value="<?php print $estado; ?>"
                </label></td>
        </tr>
        <tr>
            <td>Cidade:</td>
            <td><label>
                    <input type=text name="cidade" size="25" value="<?php print $cidade; ?>"
                </label></td>
        </tr>
        <tr>
            <td>Login:</td>
            <td><label>
                    <input type=text name="login" size="25" value="<?php print $login; ?>"
                </label></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><label>
                    <input type=password name="senha" size="25" value="<?php print $senha; ?>"
                </label></td>
        </tr>
        <tr>
            <td><input type=submit value="Confirmar edição"></td>
            <td><input type=reset value="Limpar"></td>

    </table>
</form>

</body>
</html>