# Curso de PHP 7

## Estruturas de Controle no PHP

Criar novo arquivo, Como criar arrays, Estruturas de Controle no PHP, Estruturas Condicionais, if else, else if, if ternário, Estruturas de Decisão, switch, case, break, continue, Estruturas de Repetição, for, foreach, while, do while

### Professor Edson Maia, Dev, Informática, programação

## Estruturas
* Desvio Condicional -> if else
* Desvio de Escolha  -> switch case
* Laços de Repetição ou Iteração
	. Para, faça	 -> for
	. Para, cada	 -> foreach
	. Enquanto, faça -> while
	. Faça, enquanto -> do while

## Estruturas condicionais
* simples 	if
* completo	if, else
* encadeado if, else if, else	
* ternário	(condição) ? verdadeiro : falso

## Exemplos de Estruturas Condicionais no PHP
~~~php
	$nota_final = 6.9;

	// simples
	if($nota_final >= 7) {
		echo "<p>Aprovado</p>";
	}

	// completo
	if($nota_final >= 7) {
		echo "<p>Aprovado</p>";
	} else {
		echo "<p>Reprovado</p>";
	}

	// encadeado
	if($nota_final >= 7) {
		echo "<p>Aprovado</p>";
	} else if ($nota_final < 5){
		echo "<p>Reprovado</p>";
	} else {
		echo "<p>Recuperação</p>";
	}

	// ternário
	$situacao = ($nota_final >= 7) ? "Aprovado" : "Reprovado";
	echo "<p>$situacao</p>";
~~~

## Estrutura de Decisão
* Escolha, caso -> switch case

## Exemplos de Estrutura de Decisão
~~~php
	// DECISÃO
	// switch case

	$opcao = "1";

	switch($opcao) {
		case '1':
			echo "<p>Opção 1 escolhida</p>";
			break;

		case 'Dois':
		case 'dois':
		case 'DOIS':
		case 2:
			echo "<p>Opção dois escolhida</p>";
			break;

		case 3:
			echo "<p>Opção 3 escolhida</p>";
			break;

		default:
			echo "<p>Opção inválida</p>";
			break;
	}
~~~

## Exemplos de Estruturas de Repetição ou Iteração
* Para, faça	 -> for
* Para, cada	 -> foreach
* Enquanto, faça -> while
* Faça, enquanto -> do while
* DICA: Sempre tenha atenção ao contador que controla os laços de repetiçaõ
~~~php
	// REPETIÇÃO
	$nomes = ["Edson", "Shirley", "Maitê"];
	$quant = count($nomes);

	/*
		para faça 	   = for
		-------------------------
		para cada      = foreach
		-------------------------
		enquanto faça  = while
		faça enquanato = do while
	*/

	// FOR
	for ($i=0; $i < $quant; $i++) { 
		echo "<p>$nomes[$i]</p>";
	}

	// FOREACH
	foreach ($nomes as $indice => $nome) {
		echo "<p>$indice : $nome</p>";
	}

	// WHILE
	$c = 0; // contador fora do laço de repetição
	while ($c < $quant) {
		echo "<p>$nomes[$c]</p>";
		$c++; // incremento dentro do laço
	}

	// DO WHILE
	$a = 0; // contador fora do laço de repetição
	do {
		echo "<p>$nomes[$a]</p>";
		$a++; // incremento dentro do laço
	} while($a < $quant);

~~~

## Qual estrutura usar?
* Os desvios são feitos com condicionais ou escolhas.
* Se você tem dados reduzidos e conhece todas as respostas, é mais fácil usar o _switch case_.
* Se você tem muitos dados e não conhece todas as respostas, é mais fácil usar o _if else_.
* No caso dos laços de repetição, muitos problemas podem ser resolvidos por qualquer um deles.
* Porém, tem diferenças sutis entre eles.
* No laço _for_ você tem controle de cada passo da repetição e tem acesso ao índice ou contador de repetição.
* No laço _foreach_ você faz mais rápido o trabalho, porém, não tem acesso ao índice numérico da repetição.
* No laço _while_, a repetição acontece enquanto a condição avaliada for verdadeira. Se ela for falsa no 1º teste os comandos internos não serão executados nenhuma vez.
* No laço _do while_, a repetição acontece enquanto a condição avaliada for verdadeira. Porém, a verificação é feita somente após a execução do bloco de códigos. Se ela for falsa os comandos internos serão executados pelo menos uma vez.
