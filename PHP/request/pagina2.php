<?php 
// Com php para resgatar os parâmetros recebidos no GET
if( isset( $_POST['bt_enviar'] ) )
{
	echo "<br> valor recebido em 'inp_nome' "
	     .$_POST['inp_nome'];
}
else{
	echo "<br> 'inp_nome' não informado";
}

?>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title> Pagina 2 </title>
	</head>
	
	<body>

		<h1>Pagina 2</h1>
		
		<form action="pagina2.php" method="post">
			
			<input type="text" name="inp_nome">

			<input type="submit" name="bt_enviar" value="Enviar">

		</form>

	</body>
	
</html>