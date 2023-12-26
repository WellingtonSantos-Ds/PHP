<?php
// Interface  serve como um guia para implementar nas classes que vão utilizar esses guias. 

use Random\Engine\Mt19937;

interface Database{
   // Quando eu for implementar minha interface em uma classe milha classe implementada vai ter que obrigatoriamente ter que implementar todos os meus métodos da interface.
   public function listaProduto();
   public function adcionarProduto();
   public function modificarProduto();
   public function removerProduto();
}


class Mysql implements Database{

   public function listaProduto(){

   }

   public function adcionarProduto(){
      echo 'Adicinado com MYSQL';
   }

   public function modificarProduto(){

   }

   public function removerProduto(){

   }
}

class Mongodb implements Database{
   public function listaProduto(){

   }

   public function adcionarProduto(){
      echo 'Adicionado com MONGO';
   }

   public function modificarProduto(){

   }

   public function removerProduto(){

   }

}

$banco = new Mongodb();
echo $banco ->adcionarProduto();