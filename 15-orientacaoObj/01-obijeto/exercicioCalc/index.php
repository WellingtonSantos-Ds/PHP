<?php

require 'calc.php';

$calc = new Number();

$calc ->setSub(1);
$calc ->setAdd(2);
$calc ->setAdd(12);
$calc ->setMutiply(3);
$calc ->setDivide(2);
$calc ->setAdd(0.5);

echo 'Total = '. $calc -> getTotal()."<br>";
$calc -> setClear();
echo 'Limpo = '. $calc -> getTotal()."<br>";

