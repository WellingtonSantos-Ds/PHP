<?php 
//vantagem do encapsulamento é que eu posso  fazer uma verificação direto pelo método (set) coisa que eu não posso fazer direto com a propriedade. deixando assim  minha propriedade privada podendo ser alterada apenas pelo (set): 
class post{
   public int $id = 0;
   public int $like = 0;
   public array $coments = [];
   private string $author;


   public function setAuthor($au){
   //Estou dizendo se a variavel ($au) tiver menos de 3 caractere não trocar o nome do autor   
      if (strlen($au) > 2 ) {
         $this -> author = ucfirst($au);
      }
      
   }

   public function getAutor(){
      return $this -> author ?? 'visitante'; 
   }
}

$post1 = new post();
$post1 -> setAuthor('piz'); 
echo $post1 -> getAutor();