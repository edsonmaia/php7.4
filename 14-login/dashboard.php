<?php
    // no bloco que esta na parte de cima
    //session_start(); // iniciar sessão
    // se não existe uma variável de sessão chamada email
	// redirecione para a página index.php
    /*
	if(!isset($_SESSION['email'])) {
		header('Location: index.php');
	}
    */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
</head>
<body>
    <h1>Painel de Controle</h1>
    
    <?php
        // no bloco que esta no corpo da pagina html
        //echo "Usuário {$_SESSION['email']} logado <br>"; 
    ?>

    <p><a href="logout.php">Sair</a></p>
</body>
</html>