<html>
	<body>
		<?php
			echo "Sejam bem vindos ao sistema GymTom";
			include_once 'Aluno.php';
			$aluno = new Aluno ( "Everton", "Costa", 22, "feminino", 1.66, 60 );
			echo "<br>";
			echo $aluno->toString();
		?>
	</body>
</html>
