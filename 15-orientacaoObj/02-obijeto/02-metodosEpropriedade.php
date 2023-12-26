<?php

class post {
    private $author = 'AAA';
    public $likes = 0;
    public $coments = [];

    public function aumentaLike(){
        $this -> likes ++;

    }

    public function setComentes($add){
        // Adiciona o comentário ao array $this->coments
        $this -> coments[] = $add;
    }

    public function getAuthor(){
       
        $this-> author;

        return $this-> author;;
    }
 }

 
 $publicando = new post();

 $publicando -> aumentaLike();
 $publicando -> aumentaLike();
 //comentes publico 
 $publicando -> coments[]= 'wellington muito feio';
 $publicando -> coments[]= 'cabeça de tijolo';
 //Cometes privado
 $publicando -> setComentes(1);
 $publicando -> setComentes(34);

 echo $var1 = $publicando -> getAuthor();

 //  print_r($publicando);
 