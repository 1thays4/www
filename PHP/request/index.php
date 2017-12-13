<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title> INDEX </title>
		<style type="text/css">
			a{
				color:GREEM;
			}
			a:hover{
				color:BLACK;
			}
			a:visited{
				color:RED;
			}
		</style>
	</head>
	<body>
		<h1>INDEX</h1>
		
		<a href="?parametroA=valorA" > 
			para mesma página atraves do GET! 
			 ...php + '?' + nomPar + ' = ' + 'valor' 
		</a>
		<? // Com php para resgatar os parâmetros recebidos no GET
		if( isset( $_GET['parametroA'] ) ){
			echo "<br> valor recebido em 'parametroA' "
			     .$_GET['parametroA'];
		}
		else{
			echo "<br> 'parametroA' não informado";
		}
		?>

		<br>
		<a href="pagina2.php?parametroA=valorA" > 
			pagina 2 relativo, exemplo de post
		</a>

		<br>
		<a href="../pagina3.php" > 
			pagina 3 relativo voltando nível
		</a>

		<br> 
		<!--Caminho absoluto é usado para arquivos
		que não estajam no servidor que está interpretando o arquivo php atual. não poder deixar de usar o http:// ou https://  -->
		<a href="http://localhost/PHP/request/pagina2.php?parametroA=valorA" > 
			 pagina 2 absoluto
		</a>

	</body>
</html>