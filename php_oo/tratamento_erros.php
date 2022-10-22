<?php 
	// Usado para identificar possíveis erros
	try { // tente
		echo '<h3> *** Try *** </h3>';
		
		//$sql = 'Select * from clientes';
		//mysql_query($sql); //Erro

		// Lançando erro se o arquivo não existir
		if (!file_exists('require_arquivo_a.php')) {
			throw new Exception('O arquivo em questão deveria estar disponível as' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir mesmo assim');
		}

	} catch (Error $e) {
		echo '<h3> *** Catch Error *** </h3>';
		echo '<p style="color: red" >' . $e . '</p>';
		// Armazenando esse erro no banco de dados
	} catch (Exception $e) {	
		echo '<h3> *** Catch Exception *** </h3>';
		echo '<p style="color: red" >' . $e . '</p>';
		// Armazenando esse erro no banco de dados

	} finally {
		echo '<h3> *** Finally *** </h3>';
	}

?>