<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			$registros = array(
				array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
				array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
				array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
				array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4')
			);

			echo '<pre>';
				print_r($registros);
			echo '</pre>';

			$idx = 0;

			echo 'O array possui: ' . count($registros) . ' registros <br />';

			while ($idx < count($registros)) {

				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

				$idx++;
			}

			echo '<hr />';
			$idx = 0;

			do {
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

				$idx++;
			} while ($idx < count($registros));


			echo '<hr />';
			
			for ($idx=0; $idx < count($registros); $idx++) { 
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
			}

		?>

	</body>
</html>