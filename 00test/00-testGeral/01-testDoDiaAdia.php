<?php

function somar ($a,$b){
   
   $valor = $a + $b;

   
   do{
      echo $valor."<br>";
      $valor += 1;
   }while ($valor < 100);
      
   
    return $valor;
   
}

somar(0,95);


