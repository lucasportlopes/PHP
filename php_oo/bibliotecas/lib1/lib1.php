<?php 

	// Se chamada uma biblioteca com o mesmo nome da classe terá um erro

	namespace A;

	class Cliente implements CadastroInterface {
		public $nome = 'Jorge';

		public function __construct() {
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		public function salvar() {
			echo 'Salvar';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}

?>