<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			$num = 1;
			// condição -> operadores comparação / lógicos

			echo '-- Inicio do loop -- <br />';

			while ($num < 10) {
			//while(true){
				
				$num++;

				/*if($num > 10)
					break; // Interrompe o laço
				*/

				/*if($num == 2 || $num == 6)
					continue; // Interrompe a interação
				*/
				echo $num . '<br />';

			}
			echo '-- Fim do loop -- <br />';

		?>

	</body>
</html>