<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			//sequenciais (numéricos)
			//$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];

			$lista_frutas[] = 'Abacaxi';

			// Funções para debug de array
			echo '<pre>';
			var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr />';
			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';

			// Imprimir dado do array
			echo '<hr />';
			echo $lista_frutas[4];

			//associativos (define os indices)

			$lista_frutas_2 = array('a' => 'Banana', 
									'b' => 'Maçã',
									'c' => 'Morango',
									'd' => 'Uva');

			/* $lista_frutas_2 = ['a' => 'Banana', 
							   'b' => 'Maçã',
							   'c' => 'Morango',
							   'd' => 'Uva'];
			*/

			$lista_frutas_2['e'] = 'Abacaxi';

			echo '<hr />';
			echo '<pre>';
			var_dump($lista_frutas_2);
			echo '</pre>';
			echo '<hr />';
			echo '<pre>';
			print_r($lista_frutas_2);
			echo '</pre>';

			// Imprimir dado do array
			echo '<hr />';
			echo $lista_frutas_2['a'];

			

		?>

	</body>
</html>