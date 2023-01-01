<?php
    session_name("LOGIN");
    session_start();

    // if(!isset($_SESSION['user']) || $_SESSION['user']=='anonimo'){
    //     header('Location:../FORO/login.php?error=area_privado&url='.$_SERVER['REQUEST_URI']);
    //     exit;
    // }

     spl_autoload_register(function($class){
        $classPath=realpath("../Formulario");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });
    $titulo= new Simple\Texto("Titulo","Introduce titulo",3,30,20,"titulo");
    $descripcion= new Especial\TextArea("Descripcion","Introduce descripcion",10,50);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./control.css">
    <title>newForo</title>
</head>
<body>
    <form action="" method="post">
        <label>
            <?=$titulo->pintar($_POST);?>
        </label><br/><br/>
        <label>
            <?=$descripcion->pintar($_POST);?>
        </label><br/><br/>
        <label>
            <input type="submit" value="Enviar">
        </label>
    </form>
</body>
</html>