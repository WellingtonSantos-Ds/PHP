<?php


// Com o método estático eu chamo ele referenciado minha classe não mas meu objeto;
class Matematica{

   public static function somar($a,$b){
      return $a + $b;
   }

}


echo Matematica:: somar(2,3);