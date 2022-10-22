<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			//in_array() -> true ou false (Verifica se um parametro pertence ao aray)
			//array_search() -> retorna o indice do valor pesquisado caso ele exista

			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';

			$existe = in_array('Maçã', $lista_frutas);
			// true -> texto = 1
			// false -> texto = vazio

			$existe2 = array_search('Abacaxi', $lista_frutas);

			// true -> texto = 1
			// null -> texto = vazio

			if($existe){
				echo 'Sim, o valor pesquisado existe no array';
			}
			else{
				echo 'Não, o valor pesquisado não existe no array';
			}

			echo '<br />';

			if($existe2 <> null){
				echo 'Sim, o valor pesquisado existe no array';
			}
			else{
				echo 'Não, o valor pesquisado não existe no array';
			}

			// array multidimensional
			$lista_coisas = [
				'frutas' => $lista_frutas, 
				'pessoas' => ['João', 'Maria']
			];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';

			echo in_array('Uva', $lista_coisas['frutas']);

		?>

	</body>
</html>