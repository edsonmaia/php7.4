<?php

	// FUNÇÕES

	// função sem parâmetros e sem retorno
	function exibeOlaMundo()]
	{
		echo "<p>Olá Mundo!</p>";
	}
	// Chamar ou evocar
	exibeOlaMundo();

	// função com parâmetros e sem retorno
	function exibeMensagem(string $mensagem)
	{
		echo "<p>$mensagem</p>";
	}
	exibeMensagem("Meu nome é Edson");

	// função com parâmetros e com retorno
	function somarDoisNumeros(float $n1, float $n2): float
	{
		return $n1 + $n2;
	}
	$resultado = somarDoisNumeros(2, 11);
	echo "<p>$resultado</p>";
