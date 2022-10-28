<?php
    spl_autoload_register(function($class){
         $classPath=realpath("./");
         $file = str_replace('\\','/',$class);
         require("$classPath/${file}.php");
    });

    

    $humano=new Personajes\PersonajeHumano();
     echo $humano->atacar();
     print("<br>");
     echo $humano->defender();
?>