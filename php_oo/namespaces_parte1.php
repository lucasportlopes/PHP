<?php 

	// Se chamada uma biblioteca com o mesmo nome da classe terá um erro

	namespace A;

	class Cliente implements \B\CadastroInterface {
		public $nome = 'Jorge';

		public function __construct() {
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		//public function salvar() {
		//	echo 'Salvar';
		//}
		public function remover() {
			echo 'Remover';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}

	namespace B;

	class Cliente implements CadastroInterface {
		public $nome = 'Gabriel';

		public function __construct() {
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		public function remover() {
			echo 'Remover';
		}
	}

	// Está no namespace B
	$c = new Cliente();
	print_r($c);
	echo $c->__get('nome');

	//---------------------
	// Troca de namespace
	$c = new \A\Cliente();
	print_r($c);
	echo $c->__get('nome');

	interface CadastroInterface {
		public function remover();
	}

?>