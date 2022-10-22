<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			
			// Recebe desconto no frete se possui o cartão da loja e se o valor da compra for maior que 100.
			$usuario_possui_cartao_loja = true;
			$valor_compra = 99;
			$valor_frete = 50;
			$recebeu_desconto_frete = true;

			$valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

			$recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

			$valor_frete = $valor_frete_aux;

		?>

		<h1>Detalhes do pedido</h1>

		<p>Valor da compra: <?= $valor_compra ?></p>

		<p>Possui cartão da loja?
			<?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>
		</p>

		<p>Recebeu desconto no frete?
			<?php
				$teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';

				echo $teste;
			?>
		</p>

		<p>Valor do frete: <?= $valor_frete ?></p>

	</body>
</html>