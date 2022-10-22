<?php

	class Carro extends Veiculo{
		public $teto_solar = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar() {
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante() {
			echo 'Alterar posicao volante';
		}	
	}

	class Moto extends Veiculo{
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar() {
			echo 'Empinar';
		}

	}

	class Veiculo {

		public $placa = null;
		public $cor = null;

		function acelerar() {
			echo 'Acelerar';
		}

		function freiar() {
			echo 'Freiar';
		}
	}


	$carro = new Carro('IVR7J08', 'Vermelho');
	$moto = new Moto('IPL4010', 'Vermelha');

	echo $carro->acelerar();

	echo '<pre>';
	print_r($carro);
	echo '<br /><br />';
	print_r($moto);
	echo '</pre>';

?>