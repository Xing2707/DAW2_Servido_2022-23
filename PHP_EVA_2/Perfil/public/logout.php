<?php
 require("../SRC/init.php");

 if(isset($_SESSION['nombre'])){
    $_SESSION['nombre']="";
    unset($_SESSION['nombre']);
    unset($_COOKIE['recuerdame']);
 }
 
 session_destroy();

 setcookie('recuerdame',null,time()-1);

 header("location:listado.php");
 die();
?>