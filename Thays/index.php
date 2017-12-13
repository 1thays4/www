<html>
<head>
<title>Sistema de Login</title>
</head>

<body>
	<div id="div_login"
		style="text-align: center; width: 100%; height: 100%">
		<form
			style="width: 250px; margin: auto; margin-top: 10%; border-radius: 5px; border: 1px solid #ddd; padding: 0 10px 20px;"
			name="loginform" method="post" action="userauthentication.php">
			<h3>Login</h3>
			E-mail: <input type="text" name="email" /><br /> <br /> Senha: <input
				type="password" name="senha" /><br /> <br> <input type="submit"
				value="Entrar" /> <input type="reset" value="Limpar">
				 <a href="cadastro.php">Cadastre-se</a>
		</form>
	</div>
</body>
</html>