<?php

//exporta a página para outra página.
require('header.php');

// não deixa sobre escrever o arquivo. Só puxa o arquivo uma unica vez.
require_once('header.php');

// Faz a mesma coisa que o require. Mas se não tiver o arquivo ele roda mesmo assim 
include('header.php');

// Chamando a pasta 
require('tenple/header.php');

//voutar uma pasta
require('../tenple/header.php');