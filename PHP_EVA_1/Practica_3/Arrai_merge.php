<?php
   $a1=array("a"=>"rojo");
   $a2=array("b"=>"añil", "c"=>"violeta");
   $a3=array("d"=>"verde","f"=>"naranja");
   $a4=array("i"=>"azul");
   $a5=array("g"=>"azul", "h"=>"blanco");

   $resultado=array_merge($a1,$a3,$a4);

   print_r($resultado);
?>