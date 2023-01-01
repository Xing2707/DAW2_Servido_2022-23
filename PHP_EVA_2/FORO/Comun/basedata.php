<?php
    try{
        $options=[
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
        ];
        $mysql =new PDO('mysql:host=localhost;dbname=PRACTICAS;charset=utf8mb4',"USUARIO","USUARIO");

        $mysql->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }catch(PDOException $e){
        echo "problemon con la base de datos";
        die();
    }
?>