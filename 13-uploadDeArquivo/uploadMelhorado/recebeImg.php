<?php
session_start();


$cpf = filter_input(INPUT_POST,'cpf');

if($cpf){
   $_SESSION['usCpf'] = $cpf;
   move_uploaded_file($_FILES['recebeimg']['tmp_name'],'salvaimg/'.$cpf.'.png');
}
  
 header('location:index.php');



