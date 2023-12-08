<?php 

class Nave{
   public string $nomeNave ;
   public string $piloto ;
   private int $velocidade = 20;
   
   public function __construct($nome,$pilot) {
      $this-> nomeNave = $nome;
      $this-> piloto = $pilot;
   }

   function setVelocidade($velo){
      if ($velo < $velo) {
         $this-> velocidade = $this-> velocidade - $velo;
      }else {
         $this-> velocidade = $this-> velocidade + $velo; 
      }
   
   }

   function getVelocidade(){
      return $this-> velocidade;
   }

}

$chama = new Nave('Star ship '," Bora cueca");
$chama -> setVelocidade(-2);
echo $chama -> nomeNave."<br>";
echo $chama -> piloto."<br>";
echo $chama -> getVelocidade()."<br>";




