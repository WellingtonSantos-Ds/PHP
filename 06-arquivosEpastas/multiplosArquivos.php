<?php

//exporta a pagina para outra pagina.
require('header.php');

// não deixa sobre escrever o arquivo. Só puxa o arquivo uma unica vez.
require_once('header.php');

// Faz a mesma coisa que o require. Mas se não tiver o arquivo ele roda mesmo assim 
include('header.php');

