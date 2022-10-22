<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			$parametro = false;

			// true = 1 and false  = vazio

			switch ($parametro) {
				case 1:
					echo 'Entrou no case 1 </br>';
					break;
				case 'abc':
					echo 'Entrou no case 2';
					break;

				case false:
					echo 'Entrou no case 3';
					break;
				
				default:
					echo 'Entrou no default';
					break;
			}
			
		?>

	</body>
</html>