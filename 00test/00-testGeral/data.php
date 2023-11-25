<?php
function pucha(){
   $dt = date('d/m/Y');
   $ad =' Adicinado '; 
 
   return $ad.$dt;
}

echo pucha();