<?php 
require 'classe/matematica/mabasico.php';

// com o use estou referenciando minha classe do namespace;
use classe\matematica\Basico as AclassB;

$m = new AclassB();
echo $m->name();

