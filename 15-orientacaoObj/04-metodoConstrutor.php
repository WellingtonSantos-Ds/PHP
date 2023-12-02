<?php
 
class post{
   public int $id = 0;
   public int $like = 0;
   public array $coments = [];
   public string $outhor  = '';

   //Seve para quando eu quero executar um objeto assim qye ele for ciado  : o parametro pode ter valore opcionais valores já cétados 
   public function __construct($addid,$addlike = 0){
      $this->id = $addid;
      $this -> like = 6;
     
   }  

   public function addlike(){
      $this->like++ ;
   }
}

$pos = new post(1);
echo 'Like  = '.$pos-> like."<br>";
$pos2 = new post(2);
echo 'Like  = '.$pos2-> like."<br>".'id = '.$pos2 -> id."<br>";
