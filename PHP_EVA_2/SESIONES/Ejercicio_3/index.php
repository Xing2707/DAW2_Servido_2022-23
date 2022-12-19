<?php
    session_start();
    spl_autoload_register(function($class){
        $classPath=realpath("./");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });

    const LONGCAPCHAT = 4;
    $userName= new Simple\Texto("Nombre Usuario","Introducer nombre de Usuario",3,20,20,"Username","/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/");
    $passWord= new Simple\Texto("Cotraseña","Introduce contraseña",8,22,20,"password","/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/");
    if(isset($_POST['Enviar'])){
        if($userName->validar($_POST) && $passWord->validar($_POST)){
            $capchat="";
            for($i=0; $i<LONGCAPCHAT; $i++){
                $capchat.=chr(mt_rand(65,90));
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            width: 99%;
            height: 98%;
        }
        form{
            width: 40%;
            height: 40%;
            border: 5px outset cyan;
            margin: auto;
            padding: 1%;
            text-align: center;
            position: relative;
            top:20%;
        }
       input{
        margin-top: 3%;
       }
       #password{
        font-display: block;
       }
    </style>
</head>
<body>
    <form method="post">
        <label><?=$userName->pintar($_POST)?></label><br>
        <label><?=$passWord->pintar($_POST)?></label><br>
        <label><input type="submit" value="Enviar" name="Enviar"></label>
    </form>
    //<?=pintarcapchat($opcion)?>
</body>
</html>