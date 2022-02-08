# Curso de PHP 7
## Como criar sessões no PHP

criar variáveis de sessão, $_SESSION['nomeVariavel'], session_start, session_id, session_unset, session_destroy, concatenar textos com strings complexas, criar logout

### Professor Edson Maia, Dev, Informática, programação

## Como testar:
. Com o servidor 'startado' abra o arquivo 13-sessao.php
. Você verá os dados de nome, idade e session id
. Agora abra o arquivo teste.php em uma nova aba
. Você também verá os mesmos dados de nome, idade e session id
. Isso só é possível porque estamos trabalha com sessões no PHP
. Feche o navegador e depois com servidor startado abra o arquivo teste.php
. Veja como irão aparecer vários erros
. Abra o arquivo 13-sessao.php
. Agora se você atualizar as páginas não teremos mais erros

## Quanto tempo o conteúdo fica disponível?
* Fica enquanto o navegador está aberto, se você fechar a sessão é destruída.
* Você também pode destruir a sessão usando o comando session_destroy()

## logout
* Serve para sair de uma sessão, fechar ela, destruí-la.
* Você pode usar o nome que quiser para este arquivo.
* Após abri-lo, ele será executado
* Vá para a aba teste.php atualize e veja que não terá mais sessão ativa

## Funções:
* session_start(); inicar sessão
* session_id();  pegar id único da sessão
* session_unset(); limpar variáveis de sessão
* session_destroy(); destruir ou finalizar um sessão

## Links:
<https://www.php.net/manual/pt_BR/function.session-start.php>
<https://www.php.net/manual/pt_BR/function.session-id.php>
<https://www.php.net/manual/pt_BR/function.session-unset.php>
<https://www.php.net/manual/pt_BR/function.session-destroy.php>
