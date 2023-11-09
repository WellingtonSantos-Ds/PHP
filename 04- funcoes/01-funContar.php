<?php

//for  dentro da função  
function contar(){

  for( $i = 0; $i < 10; $i++){
    echo $i ."<br>"; 
  }

  echo "<hr>";
}

contar();
contar();
contar();

// funçao controlada por um for;
function latir(){
  echo 'auu <br>';
  echo "<hr>";
}

for($i=0; $i < 10; $i++){
  latir();
}