<?php

require 'classe/matematica/mabasico.php';

// Se Meu namespace for do mesmo nome da classe eu posso chamar diretamente sem o (as);
use classe\matematica\Basico;

$m = new Basico();
echo $m->name();