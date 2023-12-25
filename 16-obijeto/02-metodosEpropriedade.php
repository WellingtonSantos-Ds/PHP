<?php

class post {
    private $author = 'AAA';
    public $likes = 0;
    public $coments = [];

    public function aumentaLike(){
        $this -> likes ++;

    }

    public function arr($add){
        // Adiciona o comentário ao array $this->coments
        $this -> coments[] = $add;
    }

    public function pa(){
       
        $this-> author;

        return $this-> author;;
    }
 }

 
 $publicando = new post();

 $publicando -> aumentaLike();
 $publicando -> aumentaLike();
 $publicando -> coments[]= 'wellington muito feio';
 $publicando -> coments[]= 'cabeça de tijolo';
 $publicando -> arr(1);
 $publicando -> arr(34);

 echo $var1 = $publicando -> pa();

 //  print_r($publicando);
 