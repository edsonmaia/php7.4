<?php

	// COMENTÁRIOS
	// include ou include_once
	include_once "comentarios.php";

	if(isset($_POST['bt_enviar'])) {
		$nome  = $_POST['nome'];
		$email = $_POST['email'];
		$idade = $_POST['idade'];
		$peso  = $_POST['peso'];

		// SANITIZAR
		//include_once "sanitizar.php";
		require_once "sanitizar.php";

		echo "<p>Nome   : $nome </p>";
		echo "<p>E-mail : $email </p>";
		echo "<p>Idade  : $idade </p>";
		echo "<p>Peso   : $peso </p>";

		// FILTROS
		//include "filtros.php";

		// FILTROS SANITIZADOS
		//include "filtros-sanitizados.php";
		include_once "filtros-sanitizados.php";

		// EXIBE ERROS
		//include "exibe-erros.php";
		include_once "exibe-erros.php";
 
 		// include o arquivo pode ser importante ou não
		// include ou include_once lança um warning (aviso) e o programa continua o processamento
		// require o arquivo é requerido, é importante
		// require ou require_once lança um fatal_error (erro fatal) e o programa para a execução
		// _once significa que ele ser incluido ou requerido uma única vez no arquivo.
		// ele serve para evitar chamadas duplicadas de include ou de require

	}
	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validações</title>
</head>
<body>

	<form action="cadastro.php" method="POST">
		<label>
			Nome
			<input type="text" name="nome" autofocus />
		</label> <br>
		<label>
			E-mail
			<input type="email" name="email" />
		</label> <br>
		<label>
			Idade
			<input type="number" min="1" max="120" step="1" name="idade" /> anos
		</label> <br>
		<label>
			Peso
			<input type="number" min="2.4" max="200.0" step="0.1" name="peso" /> Kilos
		</label> <br>
		<button type="submit" name="bt_enviar">Enviar</button>
	</form>

</body>
</html>