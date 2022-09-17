<?php
    $nombre="Usuario";
    $r=rand(1,100);
    $pi=3.14;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #titulo{ 
            background-color: aqua; 
            margin: 15px;
        }

        #contenido{
            font-size: 20px;
            font-family:serif;
            color:#F44336;
            margin: 15px;
            padding: 0px 10px 10px;
        }
    </style>
</head>
<body>
        <h1 id="titulo">Caluculador de Circuferencia con el radio generado automaticamente</h1>
        <p id="contenido">
            bienvenido nuestro pagina <?php echo "$nombre"?><br/><br/>
            el numero de radio es: <?php echo "$r"?> <br/><br/>
            <?php $total=$r*$pi?>
            arede de circulo es <?php echo "$total"?><br/><br/>
        </p>   
</body>
</html>