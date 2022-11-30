<?php
    spl_autoload_register(function($class){
        $classPath="./";
        require("$classPath${class}.php");
    });
    $id=new Numero("id",1000,6,1);
    $nombre=new Texto("nombre",20,3);
    $trofeo=new Numero("trofeo",1000,0,1);

    if(isset($_POST['Enviar'])){
        if(
            $id->comprobar($_POST) &&
            $nombre->comprobar($_POST) &&
            $trofeo->comprobar($_POST)
        ){
            try{
                $mydata =new PDO('mysql:host=localhost;dbname=PRACTICAS',"USUARIO","USUARIO");
        
                $ciclista=$mydata->prepare("INSERT INTO Ciclistas VALUES(:id,:nombre,:num_trofeos)");
                $ciclista->bindParam(':id',$_POST[$id->getNombre()]);
                $ciclista->bindParam(':nombre',$_POST[$nombre->getNombre()]);
                $ciclista->bindParam(':num_trofeos',$_POST[$trofeo->getNombre()]);
                $ciclista->execute();
                
                if($ciclista->exeecute(array(':id'=>$id,':nombre'=>$nombre, 'num_trofeos'=>$trofeo))){
                    echo "Insert correcto";
                }
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
        <?=$id->crear($_POST)?>
        <?=$nombre->crear($_POST)?>
        <?=$trofeo->crear($_POST)?>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>
</html>