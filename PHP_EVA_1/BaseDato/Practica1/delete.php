<?php
     spl_autoload_register(function($class){
        $classPath="./";
        require("$classPath${class}.php");
    });

    //$id=new Numero("id",1000,6,1);

    $nombre=new Texto("nombre",20,3);

    if(isset($_POST['Enviar'])){
        if($nombre->comprobar($_POST)){
            try{
                $mydata =new PDO('mysql:host=localhost;dbname=PRACTICAS',"USUARIO","USUARIO");
                $ciclista=$mydata->prepare("DELETE FROM Ciclistas WHERE nombre=:nombre");
                $ciclista->bindParam(':nombre',$_POST[$nombre->getNombre()]);
                $ciclista->execute();
                echo $mydata->exec("DELETE FROM Ciclistas WHERE nombre=:nombre");
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
        <?=$nombre->crear($_POST)?>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>
</html>
