<?php 
	
	class Pai {
		private $nome = 'Jorge';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz';

		/*
		public function setNome($nome) {
			if(strlen($nome) >= 3){
				$this->nome = $nome;
			}
		}

		public function getNome() {
			return $this->nome;
		}

		public function setSobrenome($sobrenome) {
			if(strlen($sobrenome) >= 3){
				$this->sobrenome = $sobrenome;
			}
		}

		public function getSobrenome() {
			return $this->sobrenome;
		}
		*/

		public function __set($atributo, $value){
			$this->$atributo = $value;
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		private function executarMania() {
			echo 'Assobiar';
		}

		protected function responder() {
			echo 'Oi';
		}

		public function executarAcao() {
			$this->executarMania();
			echo '<br />';
			$this->responder();
		}	
	}

	class Filho extends Pai {
		public function __construct(){
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '</pre>';
		}

		// Herança permanece chamando o Pai
		private function executarMania() {
			echo 'Cantar';
		}

		// Nesse caso será chamado o executarMania do Filho
		public function x() {
			$this->executarMania();
		}

		// Nesse caso executa do metodo Filho
		protected function responder() {
			echo 'Olá';
		}
	}

	$pai = new Pai();

	/*
	echo $pai->humor;
	$pai->humor = 'Triste';
	echo '<br />';
	echo $pai->humor;

	echo '<br />';
	echo $pai->getNome();
	$pai->setNome('Luiz');
	echo '<br />';
	echo $pai->getNome();

	echo '<br />';
	echo $pai->getSobrenome();
	$pai->setSobrenome('Vargas');
	echo '<br />';
	echo $pai->getSobrenome();
	*/

	/*
	echo $pai->nome;
	echo '<br />';
	echo $pai->sobrenome;
	$pai->sobrenome = 'Lopes';
	echo '<br />';
	echo $pai->sobrenome;
	echo '<br />';

	//echo $pai->executarMania();
	//echo $pai->responder();
	echo $pai->executarAcao();
	*/

	$filho = new Filho();

	echo '<pre>';
		print_r($filho);
	echo '</pre>';	

	$filho->executarAcao();
	echo '<br />';
	$filho->x();

	/*
	echo $filho->getAtributo('humor');
	echo '<br />';
	echo $filho->getAtributo('sobrenome');
	echo '<br />';
	echo $filho->getAtributo('nome'); // erro pois é privado

	$filho->setAtributo('humor','Triste');
	echo '<br />';
	echo $filho->getAtributo('humor');

	$filho->setAtributo('sobrenome','Pereira');
	echo '<br />';
	echo $filho->getAtributo('sobrenome');

	$filho->setAtributo('nome','Pedro'); //será definido um atributo dinamico nome
	echo '<pre>';
		print_r($filho);
	echo '</pre>';	
	echo '<br />';
	echo $filho->getAtributo('nome');

	*/

	//exibir os métodos do objeto
	

?>