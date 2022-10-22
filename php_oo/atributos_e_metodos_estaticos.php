<?php 
	
	class Exemplo {
		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu sou um atriuto normal';

		public static function metodo1() {
			echo 'Eu sou um método estático';
		}

		public function metodo2() {
			echo 'Eu sou um método normal';
		}
	}


	//$x = new Exemplo();
	// Atributos e metodos estaticos não precisam ser criados
	/*
	echo Exemplo::$atributo1;
	echo '<br />';
	Exemplo::metodo1();
	*/

	// Gera erro -> metodo não estático
	//echo Exemplo::atributo2;
	//echo Exemplo::metodo2();

	// Não é possível acessar atributos estaticos com o operador ->
	// Não é possível acessar metodos estáticos com o operador $this
	$x = new Exemplo();
	echo $x->atributo1;

?>