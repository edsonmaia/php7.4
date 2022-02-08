<?php

	$produto = $_GET['palavra'];

	echo "<p>O produto pesquisado foi $produto</p>";

	var_dump($_GET);

	// método GET recebe os parâmetros na URL
	// na url aparece o conteudo que foi passado, chave=valor
	// localhost:8000/pesquisa.php?produto=Arroz
	// podemos passasr mais parametros
	// localhost:8000/pesquisa.php?produto=Arroz&categoria=Alimentos
	// tecle Enter e veja o resultado
