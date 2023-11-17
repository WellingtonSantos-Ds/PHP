<?php

//exporta as configurações e conteúdo de um arquivo para outro. se não tiver esse arquivo ele da um erro fatal.
require('header.php');

// Posso armazenar  nome de usuário e senha em um arquivo , E da um (require) e pucha apenas as configurações de usuário e senha da quele arquivo para o servidor.Sem nenhuma estilização de pagina.apenas as variáveis.
require('config.php');  

// Faz a mesma coisa que o require. Mas se não tiver o arquivo da um erro, mas não é um erro fatal, mesmo indicando o erro ele roda mesmo assim. O (require) não ele para a execução do arquivo.
include('header.php');

// Não deixa sobre escrever o arquivo. Só puxa o arquivo uma unica vez. Ou seja não vai aparecer dois header se eu colocar dois arquivos header do mesmo tipo. Diferente do (require) que vai aparecer os dois.  
require_once('header.php');
require_once('header.php');

// Chamando a pasta e pegando o arquivo.
require('tenple/header.php');

//voutar uma pasta e pegando o arquivo.
require('../tenple/header.php');