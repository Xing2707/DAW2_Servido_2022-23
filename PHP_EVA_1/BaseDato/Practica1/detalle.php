<?php
    $id=$_GET['id'];
    try{
        $mydata =new PDO('mysql:host=localhost;dbname=PRACTICAS',"USUARIO","USUARIO");

        $ciclista=$mydata->prepare("SELECT * FROM Ciclistas WHERE id=:id");
        $ciclista->bindValue(':id',$id);
        $ciclista->setFetchMode(PDO::FETCH_ASSOC);
        $ciclista->execute();
        $array=[];
        while($row = $ciclista->fetch()){
            array_push($array,$row["id"],$row["nombre"],$row["num_trofeos"]);
        }
        function imprimir($array){
            echo"
                <table>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Trofeo</td>
                    </tr>
                    <tr>";
                        array_walk($array,function($item,$clave){
                            echo"<td>$item</td>";
                        });
                    echo"</tr>
                </table>
            ";
        }
    }catch(PDOExcetion $e){
        print "Error".$e->getMessage()."\n";
        die();
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
            table,tr,td{
                border: 2px solid blue;
                border-collapse: collapse;
                padding: 5px;
            }
            #hipervinculo{
                margin:5px;
            }
            a{
                text-decoration: none;
            }
    </style>
</head>
<body>
    <div></div>
    <?=imprimir($array)?>
    <div id="hipervinculo">
        <a href="index.php">volver</a>
    </div>
</body>
</html>