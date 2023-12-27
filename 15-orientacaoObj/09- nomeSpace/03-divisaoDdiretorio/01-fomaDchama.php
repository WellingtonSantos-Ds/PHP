<?php
// O namespace é bastante utilizado na divisão de diretório ou seja encapsulamento; primeira forma de usar é com o require mas não é recomendado;

require 'classe/matematica/mabasico.php';

//puchando o namespace e a classe;
$m = new classe\matematica\Basico();

echo $m ->name();