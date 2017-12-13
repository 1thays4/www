<html>
<head>
<meta charset="UTF-8">
<link rel = "icon"  href = "public_html/favicon.png" type = "imagem / png" />
<title>Sistema de Login</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
form {
	background-color: #f1f1f1;
}

.button {
	display: inline-block;
	border-radius: 4px;
	background-color: #4169E1;
	border: none;
	color: #FFFFFF;
	text-align: center;
	font-size: 15px;
	padding: 20px;
	width: 100%;
	transition: all 0.5s;
	cursor: pointer;
	margin: 5px;
}

.button span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}

.button span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -20px;
	transition: 0.5s;
}

.button:hover span {
	padding-right: 25px;
}

.button:hover span:after {
	opacity: 1;
	right: 0;
}

.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
}

img.avatar {
	width: 40%;
	border-radius: 50%;
}

.container {
	padding: 16px;
}

p {
	font-size: 15px;
}

input[type=text], input[type=password] {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}
</style>
</head>

<body>

	<div id="div_login" class="span3 well well-large offset4"
		style="text-align: center; width: 100%; height: 100%">
		<form
			style="width: 250px; margin: auto; margin-top: 10%; border-radius: 5px; border: 1px solid #ddd; padding: 0 10px 20px;"
			name="loginform" method="post" action="userauthentication.php">
			<div class="imgcontainer">
				<img src="img_avatar.png" alt="Avatar" class="avatar">
			</div>
			<input type="text" name="email" placeholder="Entre com seu E-mail"> <input
				type="password" name="senha" placeholder="Entre com sua Senha">

			<button class="button" style="vertical-align: middle">
				<span>Entrar </span>
			</button>

			<p>
				<a href="cadastro.php">Cadastre-se</a>
			</p>
		</form>
	</div>
</body>
</html>