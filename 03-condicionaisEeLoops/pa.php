<?php

$lista = ['Placa', 'Menmoria','Teclado', 'Mouse'];

echo "<h2> Periferico Aliexpres</h2>";
echo "<ul>"; 
foreach($lista as $valor){
  echo "<li>".$valor."</li>";
}
echo"</ul>";