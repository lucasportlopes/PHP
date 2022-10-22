<?php
	
	//modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters setters (overloading / sobrecargar)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

		/*
		// setters
		function setNome($nome) {
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

		function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		// getters

		function getNome() {
			return $this->nome;
		}

		function getNumFilhos() {
			return $this->numFilhos;
		}

		function getTelefone() {
			return $this->telefone;
		}

		*/

		//métodos

		function resumirCadFunc() {

			return $this->__get('nome'). ' possui ' . $this->__get('numFilhos') . ' filhos(s) e telefone ' . $this->__get('telefone');
		}

		function modificarNumFilhos($numFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	/*
	$y = new Funcionario();
	$y->setNome('Pedro');
	$y->setNumFilhos(5);
	$y->setTelefone('51 992645578');
	echo $y->resumirCadFunc();
	echo '<br />';

	$x = new Funcionario();
	$x->setNome('Lucas');
	$x->setNumFilhos(2);
	$x->setTelefone('51 985305565');
	echo $x->resumirCadFunc();

	echo '<br />';
	echo $y->getNome() . ' possui ' . $y->numFilhos . ' filhos';

	*/

	$y = new Funcionario();
	$y->__set('nome','Pedro');
	$y->__set('numFilhos', 5);
	$y->__set('telefone', '51 992645578');
	echo $y->resumirCadFunc();
	echo '<br />';

	//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)';
?>