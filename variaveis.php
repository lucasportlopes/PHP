<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			//string
			$nome = 'Jorge Sant Ana';

			//int
			$idade = 29;

			//float
			$peso = 82.5;

			//boolean
			$fumante_sn = true; // true = 1 or false = vazio

			// Mudanças de tipo são permitidas nas variáveis

			$idade = 29.0;
		?>

		<h1> Ficha Cadastral </h1>
		<p> Nome: <?= $nome ?> </p>
		<p> Idade: <?= $idade ?> </p>
		<p> Peso: <?= $peso ?> </p>
		<p> Fumante: <?= $fumante_sn ?> </p>

	</body>
</html>