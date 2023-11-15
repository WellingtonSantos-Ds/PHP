<?php

function diasDaSemana(){
   
   $d = "2023/01/05";

   echo date('d/m/Y - ',strtotime($d));

   $semanas = date ('N',strtotime($d));

   switch($semanas){
      case 1;
         echo 'Segunda';
         break;
      case 2;
         echo 'Terça';
         break;
      case 3;
         echo 'Quarta';
         break;
      case 4;
         echo 'Quinta';
         break;
      case 5;
         echo 'Sexta';
         break;
      case 6;
         echo 'Sabado';
         break;
      case 7;
         echo 'Domingo';
         break;
      default;   
   }  
}

echo diasDaSemana();