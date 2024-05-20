<?php
session_start();

if(!isset($_SESSION['user'], $_SESSION['pwd'])){

    header('location:firstPage.php?error=true');
    exit;

}else{

    
   $usuario = $_SESSION['user'];
   $senha = $_SESSION["pwd"];
   

   echo "estes são seus dados: " . $usuario . " e " . $senha;


}