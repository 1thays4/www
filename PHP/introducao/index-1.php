<html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> INDEX </title>
</head>

<body>
	<pre>
		<!-- Conteúdo HTML normal, esse não é interpredado e sim fixo -->
		<h1>INDEX</h1> 
		<?php


		$minhaVariavel 
		= array('0'=>array(
			'cod'=>'001'
			,
			'cli'=>'Cliente'
			, 
			'dat'=>'12/12/1234'
			,
			'itens'=>array(array('produto'=>'arroz'
			, 'valor'=>12.34
				)
			,array('produto'=> 'feijao'
			,'valor'=>12.34
				)
			)
			)
		);
		for ($i=0; $i <count($minhaVariavel) ; $i++) { 
				# code...
		}
		foreach ($minhaVariavel as $key => $value) {
				# code...
		}
		var_dump($minhaVariavel);

		echo '<br>*array: '.$minhaVariavel[1];

		$minhaVariavel = 'string sinples';

		echo '<br>*string: '.$minhaVariavel;

			// aqui - Conteúdo interpretado antes de ser enviado para o navegador
			// print_r - print recurssivo para arrays
			// $_REQUEST - variável de ambiemte, esse vem do navegador
			// var_dump();  - detalhes da variável
			// isset() - Informa se a variável foi iniciada
			// intval - Retorna o valor integer de var, usando a base especificada para a conversão (o padrão é a base 10).
			//phpinfo();
		if( isset($_REQUEST['linhas'] ) )
		{
			if(intval($_REQUEST['linhas'])>0)
			{   
					// $_REQUEST['linhas'] aqui já foi testado e aprovado!
				for($i=1; $i<10; $i++)
				{
					echo "\n\t\t<br>".$i;
				}
			}
		}
		else
		{
			echo '<br> ! parâmetro linhas não encontrado ! ';
		}

		?> 

	</body>

	</html>