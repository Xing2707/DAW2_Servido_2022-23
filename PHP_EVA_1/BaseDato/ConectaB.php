<?php
    try{
        $mysql =new PDO('mysql:host=localhost;dbname=prueba',"USUARIO","USUARIO");

        // $resultado = $mysql->query('SELECT * FROM Ciclistas');
        
        $id=$mysql->query('SELECT id FROM Ciclistas');
        $nombre=$mysql->query('SELECT nombre FROM Ciclistas');
        $num_trofeos=$mysql->query('SELECT num_trofeos FROM Ciclistas');

        // foreach($resultado as $file){
        //     foreach($file as $clave => $valor){
        //         echo $clave ." ". $valor ."<br>";
        //     }
        //     echo "--------------------<br>";
        // }

        foreach($id as $file => $clave){
            echo  $file."<br>";
        }

        $resultado = null;
        $mysql = null;
    }catch(PDOExcetion $e){
        print "!Error".$e->getMessage() ."\n";
        die();
    }
?>