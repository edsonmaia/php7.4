<?php

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	echo "<p>O seu e-mail é $email e sua senha é $senha</p>";

	var_dump($_POST);

	// método POST recebe os parâmetros de forma 'escondida', lacradas
	// como uma carta, eles estão em um envelope
	// não é transparente para o usuário, mas é para quem está desenvolvendo
	// é o método indicado para tráfego de dados sensíveis, seguros
	