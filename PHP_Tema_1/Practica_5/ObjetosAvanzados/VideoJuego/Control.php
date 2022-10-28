<?php
    // spl_autoload_register(function($class){
    //     $classPath="../src/";
    //     $file = str_replace('\\','/',$class);
    //     require("$classPath${file}.php");
    // });

    spl_autoload_register(function ($class){
        $classPath ="./";
        require("$classPath${class}.php");
    });
    //auto carga simpre solo sirsve para objetos que esta detro de mismo fichero(paquetes) Sin tener namespace.

    

    $humano=new PersonajeHumano();
     echo $humano->atacar();
     print("<br>");
     echo $humano->defender();
?>