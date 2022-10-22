<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			// gettype() -> retorna o tipo da variável

			// int -> float or string
			// float -> int/integer or string 
			// boolean -> int/integer or string 
			// string -> int/integer, float or boolean/bool

			$valor = '22.15';
			//$valor2 = (float) $valor; // float, double or real
			//$valor2 = (string) $valor;

			//$valor2 = (integer) $valor;
			//$valor2 = (string) $valor;

			//$valor2 = (integer) $valor;

			echo gettype($valor);
			echo '<br/>';
			echo gettype($valor2);
			
		?>

	</body>
</html>