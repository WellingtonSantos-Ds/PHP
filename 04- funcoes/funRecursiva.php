<?php

// Uma função que excuta  ela mesmo interna mente.

function dividir($valor){
     
   $metade = $valor / 2 ;

   echo $metade."<br>";

   // round aredonda o valor.
   if(round($metade) > 0){
      
      // Mandando a função divolta.
      dividir($metade);
   }

}

dividir(100);