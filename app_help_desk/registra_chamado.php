<?php

	session_start();

	// montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo']);
	$categoria = str_replace('#', '-', $_POST['categoria']);
	$descricao = str_replace('#', '-', $_POST['descricao']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

	$arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');

	fwrite($arquivo, $texto);

	fclose($arquivo);

	header('Location: abrir_chamado.php');

?>