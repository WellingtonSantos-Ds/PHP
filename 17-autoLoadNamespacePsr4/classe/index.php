<?php

require 'autoload.php';

//Uma das formas de chama;

use matematica\Basico;
use matematica\Basico2;
use foto\Upload2;

// Acessando  dos objeto na mesma pasta:
$m = new Basico();
echo $m -> somar(3,3)."<br>";
$m = new  Basico2();
echo $m -> somar2(3,3)."<br>";

//Outra forma de encontra o arquivo;
$m = new foto\Upload;
echo $m -> ver(3,3)."<br>";

// Para evitar erro primeiro eu mando o nome do objeto o mesmo do arquivo; e depôs eu chamo os outros objetos 
$m = new Upload2;
echo $m -> ver2(3,3)."<br>";


