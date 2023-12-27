<?php

interface Form
{
   public function getAria();
   public function getTipo();
}

class Quadrado implements Form
{
  
   private $largura;
   private $altura;

   public function __construct($l,$a)
   {
     $this-> largura = $l;
     $this-> altura = $a;
   }

   public function getAria()
   {
     return $this-> largura * $this->altura;;
   }

   public function getTipo()
   {
      return 'quadrado';
   }

}

class Circulo
{
   private $raio;

   public function __construct($r)
   {
      $this-> raio = $r;   
   }

   public function getAria()
   {
      return pi() * ($this->raio * $this-> raio);
   }
   
   public function getTipo()
   {
      return 'circulo';
   }

}



$quadrado = new Quadrado(5,5);
$circulo = new Circulo(7);


$array=[

  $quadrado,
  $circulo

];


foreach($array as $ob)
{
//Tanto circulo quanto quadrado vão ter que ter as mesmas propriedades para ser um polimorfismo. 
   $tipo = $ob->getTipo();
   $aria = $ob->getAria();
   echo " Arria = ".$tipo." : ".$aria."<br>";
}
