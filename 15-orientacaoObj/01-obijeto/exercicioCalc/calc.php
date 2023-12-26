<?php 

class Number{

   private $total;

   public function setAdd ($add){
      $this -> total += $add;
   }
   public function setSub ($add){
      $this -> total -= $add;
   }
   public function setMutiply ($add){
      $this->total *= $add;
   }
   public function setDivide ($add){
      $this-> total /= $add;
 
   }
   public function setClear (){
      return $this-> total = 0;
 
   }

   public function getTotal(){
      return $this->total;
   }
}