<?php
class Post{
   private $id;
   private $likes;

   public function setLikes($li){
      $this-> likes = $li;
   }
   public function setId($i){
      $this-> id = $i;
   }

   public function getLikes(){
      return $this->likes;
   }
   public function getId(){ 
      return $this->id;
   }

}

class Foto extends Post{
   
   private $url;

   public function __construct($add){
      $this-> setId($add);
   }

   public function setUrl($u){
      $this->url = $u;
   }

   public function getUrl(){
      return $this-> url;
   }
        
}

$foto = new Foto('#232323');
$foto -> setUrl('www.wellington.com');
$foto -> setLikes(34);

echo 'Id = '.$foto->getId()."<br>";
echo 'Url = '.$foto->getUrl()."<br>";
echo 'Likes = '.$foto->getLikes()."<br>";

