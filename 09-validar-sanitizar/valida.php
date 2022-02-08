<?php

	// VALIDAÇÕES
	// filter_input -> filter_var

	/* Parâmetros de validação
	FILTER_SANITIZE_SPECIAL_CHARS
	FILTER_SANITIZE_NUMBER_INT
	FILTER_SANITIZE_NUMBER_FLOAT
	FILTER_SANITIZE_EMAIL

	FILTER_VALIDATE_INT
	FILTER_SANITIZE_FLOAT
	FILTER_SANITIZE_BOOLEAN
	FILTER_SANITIZE_EMAIL
	*/

	if(isset($_POST['bt_enviar'])) {
		$nome  = $_POST['nome'];
		$email = $_POST['email'];
		$idade = $_POST['idade'];
		$peso  = $_POST['peso'];

		// ARRAY DE ERROS
		$erros = [];

		// SANITIZAR limpeza
		$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)

		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

		$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

		$peso  = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

		echo "<p>Nome   : $nome </p>";
		echo "<p>E-mail : $email </p>";
		echo "<p>Idade  : $idade </p>";
		echo "<p>Peso   : $peso </p>";

		/*
		// FILTROS
		if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
			$erros = [] = "E-mail inválido";
		}

		if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
			$erros = [] = "Idade tem que ser um número inteiro";
		}

		if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
			$erros = [] = "Peso tem que ser um número real com casas decimais";
		}

		if(!empty($erros)) {
			foreach ($erros as $erro) {
				echo "<li>$erro</li>";
			}
		}
		*/

		/*
		// FILTROS VALIDATE APOS SANITIZAR

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$erros = [] = "E-mail inválido";
		}

		if(!filter_var($idade, FILTER_VALIDATE_INT)) {
			$erros = [] = "Idade inválida";
		}

		if(!filter_var($peso, FILTER_VALIDATE_FLOAT)) {
			$erros = [] = "Peso inválido";
		}

		if(!empty($erros)) {
			foreach ($erros as $erro) {
				echo "<li>$erro</li>";
			}
		} else {
			echo "Dados corretos!";
		}


		*/





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

	<form action="valida.php" method="POST">
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