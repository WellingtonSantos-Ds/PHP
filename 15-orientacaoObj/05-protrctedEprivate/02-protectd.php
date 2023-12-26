<?php
class Post{
   private $id;
   //Eu posso atribuir valor diretamente na variavel porque ela está protected;
   protected $likes;
   // Quando é protected eu posso a cesar a variavel a partir da classe filha e sobre escrever o valor da variavel ou adicionar valor diretamente
   protected function setLikes($li){
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
      //Adicionando  valor direta mente;
      $this-> likes = 2333;
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


echo 'Id = '.$foto->getId()."<br>";
echo 'Url = '.$foto->getUrl()."<br>";
echo 'Likes = '.$foto->getLikes()."<br>";