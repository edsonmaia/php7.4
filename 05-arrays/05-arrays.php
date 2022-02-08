<?php
	
	// ARRAYS
	/*
		Vetores ou matrizes são variáveis
		multidimensionais.
		São linhas com várias colunas.
	*/

	// CRIAR ARRAYS
	$alunos = array("Edson", "Shirley", "Maitê");
	$cursos = ["PHP", "MySQL", "HTML", "CSS"];
	$ficha = [ 10, "Edson Maia", 39, 1.75, true ];
	$bebidas = [
		"sucos" => ["Acerola", "Cupuaçu"],
		"refri" => ["Pepsi", "Coca-Cola"],
		"cafes" => ["Expresso", "Cappuccino"]

	];
	$categorias = [];
	$categorias[0] = "Programação";
	$categorias[1] = "Design";

	// var_dump ou print_r
	echo "<pre>";
		var_dump($alunos);
		echo "<hr>"; // linha horizontal
		print_r($alunos);
		echo "<hr>";
		print_r($cursos);
		echo "<hr>";
		print_r($ficha);
		echo "<hr>";
		print_r($bebidas);
		echo "<hr>";
		print_r($categorias);
	echo "</pre>";

	// array, índice e valor
	// índice é uma chave (key), pode ser numérica ou textuais, ele representa uma posição no array
	// valor é o conteúdo que foi atribuído em uma posição do array

	// ESCREVER VALORES DO ARRAY
	echo "$alunos[0] <br>";
	echo $bebidas["sucos"][0] . " <br>";

	// Para "varrer" cada uma das posições de um array, usamos as estruturas de repetição

	// FUNÇÕES PARA ARRAYS

	// adicionar no final
	echo "<h2>Adicionar no final array_push</h2>";
	array_push($alunos, "Karina", "Nanci");
	print_r($alunos);

	// adicionar no inicio
	echo "<h2>Adicionar no inicio array_unshift</h2>";
	array_unshift($alunos, "Maria", "Catarina");
	print_r($alunos);

	// remover do final
	echo "<h2>Remover do final array_pop</h2>";
	array_pop($alunos);
	print_r($alunos);

	// remover do inicio
	echo "<h2>Remover do inicio array_shift</h2>";
	array_shift($alunos);
	print_r($alunos);

	// CONTAR ELEMENTOS DO ARRAY
	$quantidade_de_elementos = count($alunos);
	echo "<p>Quantidade de alunos $quantidade_de_elementos</p>";

	// ORDENAR VALORES DO UM ARRAY DE A a Z
	sort($alunos);
	print_r($alunos);

	// ORDENAR VALORES DO UM ARRAY DE Z a A
	rsort($alunos);
	print_r($alunos);
