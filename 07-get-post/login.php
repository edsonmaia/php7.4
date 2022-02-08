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
	<form action="recebe-login.php" method="POST">
		<label>
			E-mail
			<input type="email" name="email" />
		</label>
		<label>
			Senha
			<input type="password" name="senha" />
		</label>
		<button type="submit">Logar</button>
	</form>

</body>
</html>