<?php
    const cero=0;
    const cuatro=4;
    try{
        $mydata =new PDO('mysql:host=localhost;dbname=examen',"examen","examen");
        $id=0;
        $ruta=$_SERVER['HTTP_USER_AGENT'];
        $long=strrpos($ruta," (");
        $navegador=substr($_SERVER['HTTP_USER_AGENT'],cero,$long-cuatro);
        $tiempo=$_SERVER['REQUEST_TIME'];

        $ciclista=$mydata->prepare("INSERT INTO Logs VALUES(:id,:navegador,:timestampp)");
        $ciclista->bindParam(':id',$id);
        $ciclista->bindParam(':navegador',$navegador);
        $ciclista->bindParam(':timestampp',$tiempo);
        $ciclista->execute();
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
        </head>
        <body>
            <h1>HolaMundo</h1>
        </body>
    </html>
