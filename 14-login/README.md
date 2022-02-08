# Curso de PHP 7
## Como criar Login no PHP

criar variáveis de sessão, $_SESSION['nomeVariavel'], session_start, session_id, session_unset, session_destroy, header, redirecionamnto de páginas no php, concatenar textos com strings complexas, criar logout

### Professor Edson Maia, Dev, Informática, programação

## Usar sessões no login
* Criar variáveis de sessão no login é importante
* Assim podemos armazenar dados do usuário que está logado

## Código com sessão
### no arquivo index.php
~~~php
	if(isset($_POST['bt_logar'])) {
        session_start(); // iniciar sessão
		$email = $_POST['email'];
		$senha = $_POST['senha'];

        // criar variáveis de sessão
        $_SESSION['email'] = $email;

		// verificar se os dados do formulário são iguais aos do banco de dados
		if($email == $email_bd && $senha == $senha_bd) {
			// login
			header('Location: dashboard.php');
		} else {
			// falha no login
			echo "<p>E-mail e/ou senha incorretos!</p>";
		} // fim if verificação

	} // fim if isset
~~~

### no arquivo dashboard.php
~~~php
    // no bloco que esta na parte de cima
    session_start(); // iniciar sessão
~~~

### na parte do html do dashboard.php
~~~php
    // no bloco que esta no corpo da pagina html
    echo "Usuário {$_SESSION['email']} logado <br>"; 
~~~

## Controle de acesso à páginas restritas
* Faça um processo de verificação se está logado
* Na página dashboard.php

~~~php
	// na parte de cima
	session_start(); // iniciar sessão
	// se não existe uma variável de sessão chamada email
	// redirecione para a página index.php
	if(!isset($_SESSION['email'])) {
		header('Location: index.php');
	}
~~~

Links utilizados na aula:
<https://www.php.net/manual/pt_BR/language.operators.logical.php>
<https://www.php.net/manual/pt_BR/language.operators.comparison.php>
<https://www.php.net/manual/pt_BR/function.header.php>
