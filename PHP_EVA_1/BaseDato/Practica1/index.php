<?php
    spl_autoload_register(function ($class){
        $classPath ="./";
        require("$classPath${class}.php");
    });

    try{
        $mysql =new PDO('mysql:host=localhost;dbname=PRACTICAS',"USUARIO","USUARIO");

        function imprimir($mysql){
            $ciclistas=$mysql->prepare("SELECT * FROM Ciclistas");        
            $ciclistas->setFetchMode(PDO::FETCH_ASSOC);
            $ciclistas->execute();

            echo "<ul> Nombre";
            while($row = $ciclistas->fetch()){
                echo "<li><a href='./detalle.php?id={$row["id"]}'>{$row["nombre"]}</a></li>";
            }
            echo "</ul>";
        }

        function insertar( int $id,stirng $nombre, int $trofeo, $mysql){
            $ciclistas=$mysql->prepare("INSERT INTO Ciclistas (id,nombre,num_trofeo) VALUES (:id:nombre:num_trofeo)");
            $ciclistas->bindValue(':id',$id);
            $ciclistas->bindValue(':nombre',$nombre);
            $ciclistas->bindValue(':num_trofeo',$trofeo);
            if($ciclistas->excute(array(':id'=>$id, ':nombre'=>$nombre,':num_trofeo'=>$trofeo))){
                echo "<p>Insert correcto</p>";
            }

        }
    }catch(PDOExcetion $e){
        print "!Error".$e->getMessage() ."\n";
        die();
    }

    $id=new Numero("id",1000,7,1);
    $nombre=new Texto("Nombre",20,5);
    $trofeo=new Numero("trofeo",1000,0,1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            li{margin:5px;}
            a{text-decoration: none;}
    </style>
</head>
<body>
        <?=imprimir($mysql);?>

        <div>
            <p>Hecer un añado de lista</p>
            <form action=""method="post">
                <?=$id->crear($_POST);?><br><br>
                <?=$nombre->crear($_POST);?><br>
                <?=$trofeo->crear($_POST)?>
            </form>
        </div>
</body>
</html>