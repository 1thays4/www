<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> INDEX </title>
</head>

<body>
	<!-- Conteúdo HTML normal, esse não é interpredado e sim fixo -->
	<h1>INDEX</h1> 
	<?php
			// print_r - print recurssivo para arrays
			// $_REQUEST - variável de ambiemte, esse vem do navegador
			// var_dump();  - detalhes da variável
			// isset() - Informa se a variável foi iniciada
			// intval - Retorna o valor integer de var, usando a base especificada para a conversão (o padrão é a base 10).
	
	if( isset($_REQUEST['linhas'] ) ){
		echo 'parâmetro linhas = '.$_REQUEST['linhas'];
		echo '<br>parâmetro linhas = '.intval($_REQUEST['linhas']);
	}
	else{
		echo ' ! parâmetro linhas não encontrado ! ';
	}
	
	
			// Conteúdo interpretado antes de ser enviado para o navegador
	for($i=1; $i<10; $i++)
	{
		echo "\n\t\t<br>".$i;
	}

	?> 
</body>

</html>