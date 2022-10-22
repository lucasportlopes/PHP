<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			$num = 7.3;

			echo ceil($num); // Arredondamento para cima
			echo '<br />';

			echo floor($num); // Arredondamento para baixo
			echo '<br />';

			echo round($num); // Arredondamento correto
			echo '<br />';

			echo rand(); // Valor aleatório de 0 até randmax
			echo '<br />' . getrandmax();
			echo '<br />';

			echo rand(10, 20); // Valor aleatório de 10 até 20
			echo '<br />';

			echo sqrt(9);

		?>

	</body>
</html>