<?php
//Definindo Métodos e Propriedades;

class Post {

   public $like = 0;

   // Definindo propriedade como privada 
   private $coments = [];
   public $autor;

   //criando um método que adiciona like;
   public function aumentarLikes(){
      //acessando a propriedade através do this;
      $this -> like ++;  
   }   

}


$post1 = new Post();

 //chamando o método para aumentar o like: 
$post1 -> aumentarLikes(); 
$post1 -> aumentarLikes(); 

$post2 = new Post();
$post2 -> aumentarLikes(); 

//Exibido a propriedade que o meto adicionou valor 
echo 'post1 = '.$post1->like."<br>";
echo 'post2 = '.$post2->like."<br>";