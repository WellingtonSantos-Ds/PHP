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

   public function __construct($b,$r)
   {
      $this-> basicos = $b;
      $this-> basicos2 = $r;
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

$basicos = new Basic2;
$mat = new Matematica(new Basic1,$basicos);
echo $mat->addAba(10,18)."<br>";
echo $mat ->addsub(10,18);
