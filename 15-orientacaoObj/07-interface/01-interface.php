<?php
// Uma interface não é uma classe eu não posso instanciar; uma interface só é utilizada quando tenho duas classes que faz á mesma coisa como trocar de banco de dados de mysql para mongodb;

interface Database{
 // A interface é usada quando eu quero métodos obrigatórios na minha classe que extender ela;

}


class Mysql{
   //4 regras que tem que fazer em um banco de dados;
   public function listaProduto(){

   }

   public function adcionarProduto(){

   }

   public function modificarProduto(){

   }

   public function removerProduto(){

   }
}

class Mongodb{

   public function listaProduto(){

   }

   public function adcionarProduto(){

   }

   public function modificarProduto(){

   }

   public function removerProduto(){

   }
}