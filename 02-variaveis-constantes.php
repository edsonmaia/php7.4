<?php
	echo "Olá mundo! <br>";
// delimitadores de código <?php ? >
// finalize cada linha de código usando o ; ponto-e-vírgula

// comentários em linhas
# comentário em linha
/* 
Comentários
em
blocos
*/

// Comandos de saída
echo "Curso de PHP 7 <br>";
echo("Professor Edson Maia <br>");

print "Aula sobre variáveis <br>";
print("Aula sobre constantes <br>");

// CRIAR VARIÁVEIS - TIPOS STRING, INT, FLOAT/REAL E BOOLEAN
// comece com $ seguindo de letra ou underline
// nos nomes pode conter letras, numeros e _
// use um padrao snake_case ou camelCase

$nome   = "Edson Maia";		// tipo string
$curso  = "PHP 7.4";		// tipo string
$idade  = 40;				// tipo int
$altura = 1.75;				// tipo float ou real
$peso   = 84.8;				// tipo float ou real
$imc;						// variável sem atribuição de valor
$doador_de_orgaos = true;	// tipo boolean true ou false

// MOSTRA INFORMAÇÕES SOBRE AS VARIÁVEIS
var_dump($nome);
var_dump($idade);
var_dump($altura);

// ESCREVER VALOR DAS VARIÁVEIS
echo "<p> Eu sou $nome, tenho $idade anos. </p>";
echo "<p> Minha altura é $altura e peso $peso Kg </p>";

// CRIAR CONSTANTES NO PHP
// por padrão use o nome das constantes todo em letras maiúsculas
// use _ para separar se tiver mais de uma palavra no nome
define("TAXA", 0.5);   // taxa de 50%
define("JUROS", 0.01); // juros de 1%

// ESCREVER VALOR DAS CONSTANTES
// o . ponto serve para concatenar texto com outros textos, variáveis, constantes, etc.
echo "Taxa " . TAXA . "% </p>";
echo "Juros " . JUROS . "% </p>";
