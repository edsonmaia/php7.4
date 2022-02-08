<?php
	// fazer conexao, consulta no BD
	$email_bd = "edsonmaiap@gmail.com";
	$senha_bd = 123;

	if(isset($_POST['bt_logar'])) {
		//session_start(); // iniciar sessão
		$email = $_POST['email'];
		$senha = $_POST['senha'];

        // criar variáveis de sessão
        //$_SESSION['email'] = $email;

		// verificar se os dados do formulário são iguais aos do banco de dados
		if($email == $email_bd && $senha == $senha_bd) {
			// login
			header('Location: dashboard.php');
		} else {
			// falha no login
			echo "<p>E-mail e/ou senha incorretos!</p>";
		} // fim if verificação

	} // fim if isset

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form action="index.php" method="POST">
		<label>
			E-mail
			<input type="email" name="email" />
		</label>
		<label>
			Senha
			<input type="password" name="senha" />
		</label>
		<button type="submit" name="bt_logar">Logar</button>
	</form>

</body>
</html>