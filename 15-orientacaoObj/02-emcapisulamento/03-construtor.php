<?php

class post {
   protected string $author;
   private int $likes = 0;
   public array $coments = [];

   public function __construct($qtLike = 0 ){
      $this->likes = $qtLike;
   }

   public function setLikes(){
      $this-> likes++;
   }

   public function getLikes(){
      return $this->likes;
   }

   public function setAuthor($name){
      
      if(strlen($name) >= 4 ){
         $this-> author = ucfirst($name); 
      }
     
   }

   public function getAuthor(){
      return $this-> author ?? '';
   }

}

$post1 = new post(12);
$post1 -> setAuthor('wellington');

$post2 = new post();
$post2 -> setAuthor('Katarina');
$post2 -> setLikes();




echo 'Post1 = '.$post1 -> getLikes().' Likes/ '.' Author = '.$post1 -> getAuthor()."<br>";
echo 'Post2 = '.$post2 -> getLikes() .' Likes/ '.' Author = '.$post2 -> getAuthor()."<br>";