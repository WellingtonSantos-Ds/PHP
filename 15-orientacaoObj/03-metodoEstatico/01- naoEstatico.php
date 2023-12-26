<?php 

//função comum dentro da classe eu  preciso  instanciar para poder usar; já estática eu referencio pela própria class;

class Matematica{

   public function somar($a,$b){
      return $a + $b;
   }

}


$ma = new Matematica();

echo $ma->somar(3,2);