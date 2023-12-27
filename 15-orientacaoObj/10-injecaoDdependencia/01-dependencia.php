<?php

class Basic1
{
   // Se os métodos das classes não forem iguais ná hora de instanciar as classes eu tenho que trocar os métodos também;   
   public function conta($x,$y)
   {
      return $x + $y;
   }
}

class Basic2
{
   public function conta($x,$y)
   {
      return $x - $y;
   }
}


class Matematica
{
   private $basicos;
   private $basicos2;

   public function __construct()
   {
      //Não posso instanciar assim instanciar na pagando o parrameiro no construtor é melhor
      $this-> basicos = new Basic1;
      $this-> basicos2 = new Basic2;
   }

   public function addAba($x,$y)
   {
     return $this-> basicos-> conta($x,$y);
   }

   public function addsub($x,$y)
   {
      return $this-> basicos2 -> conta($x,$y);
   }
}

$mat = new Matematica();
echo $mat->addAba(5,8)."<br>";
echo $mat ->addsub(5,8);

