<?php

class Post {

   public $like = 0;
   public $coments = [];
   public $autor;

}


$post1 = new Post();
$post1 -> like = 3;


$post2 = new Post();
$post2 -> like = 10;

echo 'post1 = '.$post1->like."<br>";
echo 'post2 = '.$post2->like."<br>";