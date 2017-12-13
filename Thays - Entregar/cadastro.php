<?php
include 'conexao.php';
?>

<html>
<head>
<title>Sistema de cadastro</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
table{
    width:100%;
border-collapse: separate;
border-spacing: 15px;
}
</style>
</head>
<body>
<br>
<a href="home.php">HOME</a>
<br>
<br>
	<p>
		<font face="verdana" size="5" color="blue">Formulário para cadastro</font>
	</p>
	<form name="form1" method="post" action="cadastrando.php">
		<table>
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
	</form>

	<br>
	<a href="logout.php"> Sair</a>
</body>
</html>