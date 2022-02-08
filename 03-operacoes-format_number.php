<?php
	
	// atribuicao de
	// string é feita usando aspas "texto" ou apóstrofes 'texto'
	// int é feita digitando o numero diretamente sem usar ponto
	// float/real é feita digitando o número e usando o ponto como o separador de casas decimais
	// boolean use as palavras reservadas true ou false, true = verdadeiro, false = falso
	// ou entao use 1 para verdeiro e 0 ou vazio para false
	
	// outros tipos de dados Array, Object

	// OPERAÇÕES
	/* OPERADORES
		= atribuição
		+ adição
		- subtração
		* multiplicação
		/ divisão
		% resto
		. concatenação
	*/

	// number_format(variavel, numero_de_casas_decimais, separador_decimal, separador_milhares);

	$nota1      = 7.0;
	$nota2      = 5.0;
	$nota_final = $nota1 + $nota2;
	$nota_formatada = number_format($nota_final, ",", ".");
	echo "<p>Nota Final $nota_formatada </p>";

	$valor_pago      = 100.0;
	$valor_da_compra = 75.5;
	$troco           = $valor_pago - $valor_da_compra;
	$troco_formatado = number_format($troco, 2, ",", ".");
	echo "<p>Troco R$ $troco_formatado </p>";

	$preco_unitario = 10.0;
	$quantidade     = 2;
	$preco_total    = $preco_unitario * $quantidade;
	$preco_formatado = number_format($preco_total, 2, ",", ".");
	echo "<p>Preço Total R$ $preco_formatado </p>";

	$valor_da_compra    = 19999.00;
	$numero_de_parcelas = 5;
	$valor_da_parcela   = $valor_da_compra / $numero_de_parcelas;
	$valor_formatado = number_format($valor_da_parcela, 2, ",", ".");
	echo "<p>Valor da Parcela R$ $valor_formatado </p>";

	$dividendo = 7;
	$divisor   = 2;
	$resto     = $dividendo % $divisor;
	echo "<p>Resto $resto </p>";
