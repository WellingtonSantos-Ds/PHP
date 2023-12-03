<?php 
class number{
   private $numero

   public function add ($dd){
      $this -> numero += $add;
   }
   public function sub ($dd){
      $this -> numero -= $dd;
   }
   public function mutiply ($dd){
      $this->numero *= $add;
   }
   public function divide ($dd){
      $this-> numero /= $dd;
 
   }
   public function clean (){
      return $this-> numero = 0;
 
   }

   public function getNumero(){
      return $this->numero;
   }
}

$cri = new number();
 $cri -> add(4)

echo $cri -> getNumero();