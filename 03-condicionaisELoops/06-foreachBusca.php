<?php

$ingredientes = [
  'bolo',
  'ovo',
  'farinha',
  'chocolate', 
];

// loop para percorrer o ary . para cada loop de (ingredientes). (tudo) assume um valor do array em sequencia crescente. 

foreach($ingredientes as $tudo){
  
  echo 'Ingrediente = ' . $tudo . "<br>";

}

//buscando com a chave.

foreach($ingredientes as $chave => $tudo){
  
  echo 'Item '. $chave .' = '. $tudo ."<br>";
  
  //buscando com mas um;
  echo 'Item '. ($chave +1) .' = '. $tudo ."<br>";

}

//buscando com listas;
echo "<h2>buscacom listas</h2>";
echo "<ul>";
foreach($ingredientes as $tudo){
echo "<li>". $tudo ."</li>";
}

echo "</ul>";

