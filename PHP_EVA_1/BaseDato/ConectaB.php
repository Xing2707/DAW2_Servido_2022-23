<?php
    try{
        //Crear Variable que conecta con el base de dato.
        $mysql =new PDO('mysql:host=localhost;dbname=prueba',"USUARIO","USUARIO");

        //Crear Variable para recivil select que devuelve el base de dato.
        $resultado = $mysql->query('SELECT * FROM Ciclistas');
        
        //Usa foreach para correr y imprimir la tabla de base de dato.
        // foreach($resultado as $file){
        //     foreach($file as $clave => $valor){
        //         echo $clave ." ". $valor ."<br>";
        //     }
        //     echo "--------------------<br>";
        // }
        
        //Crear Variable que reciva error de excepcion de forma array.
        //$excepcion=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        
        

        $resultado = null;
        $mysql = null;
    }catch(PDOExcetion $e){
        print "!Error".$e->getMessage() ."\n";
        die();
    }
?>