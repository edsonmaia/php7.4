# Curso de PHP 7

## Variáveis e Constantes no PHP

Abrir e fechar código php, Linguagem Interpretada, Comentários, Variáveis, Tipos de Dados, String, Int, Float, Real, Boolean, Constantes, Comandos de saída, echo, print, var_dump, fim de linha no php, PHP_EOL, concatenar usando o ponto, Iniciar servidor web do php, hp -S localhost:8000

### Professor Edson Maia, Dev, Informática, programação

## Comentários
* São feitos em linha ou em bloco (várias linhas)
* // ou # são usados para comentários em linha
* /*  */ são usados para comentários em bloco

## Comandos de saída

### echo
~~~php
    echo "Olá mundo! <br>";  // modo mais comum
    echo("Olá mundo! <br>"); // como função
~~~

### print
~~~php
    print "Meu nome é Edson! <br>";  // modo mais comum
    print("Meu nome é Edson! <br>"); // como função
~~~

## Variáveis
* São espaços reservados na memória para guardarmos uma informação. Elas possuem um nome ou identificador. Podemos fazer atribuição de valores para elas.
* Cada linguagem tem a sua regra para definir nomes de variáveis.

## Regras de nomes de variáveis no PHP
* Deve começar com $
* O 2º caractere pode ser _ underline ou uma letra
* Aceita letras e números
* NÃO ACEITA CARACTERES ESPECIAIS, só o underline _
* NÃO ACEITA LETRAS ACENTUADAS
* Do 3º caractere em diante pode ser número
* O PHP é case sensitive, diferencia letras maiúsculas e minúsculas
* A partir da versão 7 o PHP permite a declaração do tipo
* Um padrão de nomes: snake_case ou camelCase

## Tipos de dados
* string
* int
* float ou real
* boolean

## Atribuição de valores para variáveis
* Use o sinal de igualdade para fazer a atribuição
* Quando for atribuir dados do tipo string pode digita-los entre aspas "texto" ou apóstrofos 'texto'.

### Exemplos de atribuição de valores
~~~php
$nome   = "Edson Maia";		// tipo string
$curso  = "PHP 7.4";		// tipo string
$idade  = 40;				// tipo int
$altura = 1.75;				// tipo float ou real
$peso   = 84.8;				// tipo float ou real
$imc;						// variável sem atribuição de valor
$doador_de_orgaos = true;	// tipo boolean true ou false
~~~

### var_dump()
* Função que mostra informações sobre as variáveis
* exemplo: var_dump($nome);

## Constantes
* São espaços reservados na memória para guardarmos uma informação. Elas possuem um nome ou identificador. O que as diferencia das variáveis é que elas recebem um valor inicial que não pode ser modificado.
* Cada linguagem tem a sua regra para definir nomes de constantes.

## Regras de nomes de constantes no PHP
* são criadas pela função define("NOME_DA_CONSTANTE", valor);
* Por convenção usamos os nomes de constantes todo em maiúsculas

## PHP_EOL
* É umas constante do PHP
* É usada para indicar que naquele ponto deve ter uma quebra de linha
* É usado para quebrar linhas de saídas no terminal

## Operador de concatenação
* O . ponto é o operador de concatenação
* É usado para juntarmos texto com outros texto, variáveis, contantes, etc.

### Exemplos de concatenação
~~~php
echo "Nome " . $nome . "</p>";
echo "Taxa " . TAXA . "% </p>";
echo "Juros " . JUROS . "% </p>";
~~~
