<?php

class post {
   public $author;
   public $likes = 0;
   public $coments = [];
}

$publicando = new post();
$publicando -> author = 'wellington';
$publicando -> coments = ['wqu'];

print_r($publicando);
