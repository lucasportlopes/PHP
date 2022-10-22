<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			
			// Constante (nome_variavel, valor_armazenado)

			define('BD_URL', 'endereco_bd_dev');
			define('BD_USUARIO', 'usuario_dev');
			define('BD_SENHA', 'senha_dev');

			// .. lógica ..//
			// Não é possível mudar o valor da constante, valor deve ser definido unicamente na definição.

			echo BD_URL . '<br />';
			echo BD_USUARIO . '<br />';
			echo BD_SENHA . '<br />';
		?>
	</body>
</html>