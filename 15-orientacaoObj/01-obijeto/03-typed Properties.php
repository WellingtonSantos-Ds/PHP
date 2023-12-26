
<?php
// Typed Properties propriedades tipadas:

class Post {
   // Typed Properties  definindo que a propriedade (like) só vai ser desse tipo;
   public int $like = 0;
   public array $coments = [];
   public string $autor;

   public function addLike(){
      $this-> like++;
   }
}

$post1 = new Post();
// isso vai dar um erro porque eu define que minha propriedade só vai rebeber valores inteiros 
$post1 -> like = 'Wellington';

$post2 = new Post();
$post2 -> like = 10;

echo 'post1 = '.$post1->like."<br>";
echo 'post2 = '.$post2->like."<br>";