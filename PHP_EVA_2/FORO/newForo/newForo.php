<?php
    session_name("LOGIN");
    session_start();
    require_once("../Comun/basedata.php");
    require_once("../Comun/cleanInput.php");
    require_once("../Comun/pintahtml.php");

    spl_autoload_register(function($class){
        $classPath=realpath("../Formulario");
        $file=str_replace('\\','/',$class);
        require("$classPath/${file}.php");

    });

    if(!isset($_SESSION['user']) || $_SESSION['user']=='anonimo'){
        header('Location:../FORO/login.php?error=area_privado&url='.$_SERVER['REQUEST_URI']);
        exit;
    }

    $title= new Simple\Texto("titulo","Introduce titulo",3,30,20,"titulo");
    $item= new Especial\TextArea("Descripcion","Introduce descripcion",10,50);
    $username=$_SESSION['user'];

    if(isset($_POST['Enviar'])){
        if($title->validar($_POST) && $item->validar($_POST)){
            $titulo=clean_input($_POST[$title->getName()]);
            $descripcion=clean_input($_POST[$item->getName()]);

            $consulta_1=$mysql->prepare("SELECT * FROM usuario WHERE username = :username LIMIT 1");
            $consulta_1->execute([':username' => $username]);
            $userid=$consulta_1->fetch();
            if(isset($userid)){
                $idusuario=$userid['userid'];
                $direccion="../item/".$titulo.".php";
                $newfile = fopen($direccion,"w");
                fwrite($newfile,pintar($titulo,$username,$descripcion));
                fclose($newfile);
            
                $consulta_2=$mysql->prepare("INSERT INTO creaforo(titulo,direccion,userid) VALUES(:titulo,:direccion,:userid)");
                $consulta_2->bindParam(':titulo',$titulo);
                $consulta_2->bindParam(':direccion',$direccion);
                $consulta_2->bindParam(':userid',$idusuario);
                $consulta_2->execute();
                
                header("Location:../main/main.php");
                exit;
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
    <link rel="stylesheet" href="./control.css">
    <title>newForo</title>
</head>
<body>
    <form action="" method="post">
        <?=$title->pintar($_POST);?><br/><br/>
        <?=$item->pintar($_POST);?><br/><br/>
        <label>
            <input type="submit" value="Enviar" name="Enviar">
        </label>
    </form>
</body>
</html>