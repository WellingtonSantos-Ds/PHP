<?php 

class author  extends coments{
 
  public function __construct($nome, int $idade) {
    $this->name = $nome;
    $this->age = $idade;
  }

}   

class coments  {

  public $array = [];

  public function add($para){
    array_push( $this-> array,$para);
  }

  public function imprime(){

    print_r($this -> array);
    echo "<br>";
  }

  public function percore($ser){
     $indice = array_search($ser, $this->array;

      if ($indice)) {
        echo 'tem';
      }else{
         echo 'não tem';
      } 
      
  }

}

$create = new author('Guio',90);
$create -> add('pablo');
$create -> imprime();
$create -> percore('pablo');