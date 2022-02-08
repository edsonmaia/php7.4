<?php
	// ARRAY DE ERROS
	$erros = [];

	if(!empty($erros)) {
		foreach ($erros as $erro) {
			echo "<li>$erro</li>";
		}
	} else {
		echo "Dados corretos!";
	}
