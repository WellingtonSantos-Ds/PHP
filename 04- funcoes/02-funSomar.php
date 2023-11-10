<?php

  //função normal

  function somar ($a,$b){
    
    
    $total = $a + $b;
    return $total; 
  }
  $somaTotal=somar(50,100);
  
  echo $somaTotal."<br>";

  //função com variaves

  $r = 8;
  $t = 7;

  function somar02 ($a,$b){

    $total = $a + $b;
    return $total;
  }

  $valor = somar02($r,$t);
  echo $valor."<br>";

  // função com imprimir dentro

  function somar04($a,$b){
    $total = $a + $b;
    echo $total;
    return $total;
      
  }
  somar04(4,4);

  //função normal
  function somarr($a , $b){
      $soma = $a + $b;
      return $soma;
  }

  $x = somarr(4,4);
  $y = somarr(5,5);

  $tot = ($x + $y);

  echo $tot;

