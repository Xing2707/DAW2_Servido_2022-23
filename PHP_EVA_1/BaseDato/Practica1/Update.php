<?php
     spl_autoload_register(function($class){
        $classPath="./";
        require("$classPath${class}.php");
    });

    $idNuevo=new Numero("idNuevo",1000,6,1);
    $idAntiguo=new Numero("idAntiguo",1000,6,1);
    $nombre=new Texto("nombre",20,3);
    $trofeo=new Numero("trofeo",1000,0,1);

    if(isset($_POST['Enviar'])){
        if(
            $id->comprobar($_POST) &&
            $nombre->comprobar($_POST) &&
            $trofeo->comprobar($_POST) &&
            $idAn->comprobar($_POST)
        ){
            try{
                echo "Hola";
                $mydata =new PDO('mysql:host=localhost;dbname=PRACTICAS',"USUARIO","USUARIO");
                $ciclista=$mydata->prepare("UPDATE Ciclistas SET id=:idNuevo, nombre=:nombre, num_trofeos=:trofeos WHERE id=:idAntiguo");
                //$ciclista=$mydata->prepare("UPDATE Ciclistas SET id=:id, nombre=:nombreNuevo, num_trofeos=:trofeos WHERE nombre=:nombreAntiguo");
                $ciclista->bindParam(':idAntiguo',$_POST[$idAntiguo->getNombre()]);
                $ciclista->bindParam(':idNuevo',$_POST[$idNuevo->getNombre()]);
                $ciclista->bindParam(':nombre',$_POST[$nombre->getNombre()]);
                $ciclista->bindParam(':trofeos',$_POST[$trofeo->getNombre()]);
                $ciclista->execute();
            }catch(PDOExcetion $e){
                print "Error".$e->getMessage()."\n";
                die();
            }
        }else{
            echo"Error";
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
</head>
<body>
<form action="" method="post">
        <?=$idAn->crear($_POST)?>
        <?=$id->crear($_POST)?>
        <?=$nombre->crear($_POST)?>
        <?=$trofeo->crear($_POST)?>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>
</html>