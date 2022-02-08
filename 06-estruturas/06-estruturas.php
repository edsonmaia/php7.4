<?php

	// ESTRUTURAS DE CONTROLE

	// CONDICIONAIS

	// simples   = if
	// completo  = if, else
	// encadeado = if, else if, else
	// ternario ou abreviado = (condicao) ? verdadeiro : falso

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

	// REPETIÇÃO
	$nomes = ["Edson", "Shirley", "Maitê"];
	$quant = count($nomes);

	/*
		para faça 	   = for
		-------------------------
		para cada = foreach
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
