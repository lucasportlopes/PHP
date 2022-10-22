<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			$array = 'String';

			// is_array -> verifica se o parametro é um array
			$retorno = is_array($array);

			if($retorno)
				echo 'Sim, é um array';
			else
				echo 'Não é um array';

			echo '<hr />';

			// array_keys -> retorna todas as chaves do array 

			$array = [1 => 'a', 7 => 'b', 18 => 'c'];
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			$chaves_array = array_keys($array);
			echo '<pre>';
				print_r($chaves_array);
			echo '</pre>';

			echo '<hr />';

			// sort -> ordena os elementos do array e reajuste os indices

			$array = array('teclado','mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook', );
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			sort($array); // retorna true ou false

			echo '<pre>';
				print_r($array);
			echo '</pre>';

			echo '<hr />';

			// asort -ordena os elementos do array, mas mantém os indices
			// count -> conta a quantidade de elementos do array

			$array = array('teclado','mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook', );
			echo '<pre>';
				print_r($array);
			echo '</pre>';

			asort($array); // retorna true ou false

			echo '<pre>';
				print_r($array);
				echo count($array);
			echo '</pre>';

			echo '<hr />';

			// array_merge -> uni arrays

			$array1 = ['osx', 'windows'];
			$array2 = array('linux');
			$array3 = ['solaris'];

			$novo_array = array_merge($array1, $array2, $array3);

			echo '<pre>';
				print_r($novo_array);
			echo '</pre>';

			echo '<hr />';

			// explode -> divide os elementos de uma string, dado um delimitador

			$string = '26/04/2018';

			$array_retorno = explode('/', $string);

			echo '<pre>';
				echo $string . '<br />';
				print_r($array_retorno);
			echo '</pre>';

			echo '<hr />';

			// implode -> junta os elementos de um array em uma string

			$array = ['a', 'b', 'x', 'y']; // a,b,x,y

			$string_retorno = implode(', ', $array);
			echo $string_retorno;

		?>

	</body>
</html>