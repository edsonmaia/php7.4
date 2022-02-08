# Curso de PHP 7

## Arrays no PHP

Criar novo arquivo, Como criar arrays, índice e valor, var_dump, print_r, Como atribuir valores ao array, Como ler dados de um array, array_push, array_pop, array_unshift, array_shift, Função count, Funções sort e rsort, Estruturas de repetição, for, foreach, while, do while

### Professor Edson Maia, Dev, Informática, programação

## Array = vetor ou matriz
* Vetores ou matrizes são variáveis multidimensionais.
* São formados linhas e colunas.
* Todo array tem índice ou chave (key) e valor (value)
* array, índice e valor
* índice é uma chave (key), pode ser numérica ou textuais, ele representa uma posição no array
* valor é o conteúdo que foi atribuído em uma posição do array

## Como criar array no PHP
~~~php
// CRIAR ARRAYS
	// forma antiga
	$alunos = array("Edson", "Shirley", "Maitê");

	// formas atuais
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
~~~

## var_dump() e print_r()
* São funções muito úteis para vermos o que tem em um array
* Prefira usar o print_r()
* Combine o uso deles com a tag pre do html para melhorar a visualização

## Exemplos de visualização do arrays no PHP
~~~php
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
~~~

## Como ler o valor de um posição específica do array
* Use o nome do array acompanhado dos colchetes []
* Dentro dos colchetes [] digite o número ou nome do índice
~~~php
// ESCREVER VALORES DO ARRAY
	echo "$alunos[0] <br>";
	echo $bebidas["sucos"][0] . " <br>";
~~~

## Leitura do código de um array
* $alunos[0] // retorna a coluna, posição ou índice 0 do array $alunos
* $bebidas["sucos"][0] // retorna a posição da coluna sucos e linha 0 do array $bebidas
* [] se tiver só um par de colchetes significa que o array só tem uma linha, podendo ter várias colunas, nesse caso chamamos de vetor
* [][] se tiver dois pares de colchetes significa que o array tem colunas e linhas, nesse caso chamamos de matriz

## Para escrever todas as informações de um array
* Para "varrer" cada uma das posições de um array, usamos as estruturas de repetição

## FUNÇÕES PARA ARRAYS
* array_push	Adicionar no final 
* array_pop 	Remover do final
* array_unshift Adicionar no inicio
* array_shift	Remover no inicio
* count			Contar elementos de um array
* sort			Ordenar de A a Z um array
* rsort			Ordenar de Z a A um array

~~~php
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
~~~

* Existem várias funções para manipularmos os arrays, aprenda algumas e vá expandindo o seu conhecimento conforme for precisando de novas funcionalidades.
