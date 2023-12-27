<?php
//Agora eu posso ter dois require com as mesmas classe no mesmo arquio;
require 'classe1.php';
require 'classe2.php';

//Para diferenciar os mesmos métodos da mesma classe eu chamo milha classe pelo namespace dela;
$a = new class1\MinhaClass();

echo $a -> getTestar();