<?php
    $hola="Hola mundo";
    $nombre="Xing";
    $contenido="Esta pagina ha sido programada por";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cursiva {font-family: cursive;}
        #negrita {font-weight: bold;}
        p {font-size:30px;}
    </style>
</head>
<body>
    <!-- <?php echo"<h1>".$hola."</h1> <p> <span class='cursiva'>Esta pagina ha sido programada por ".$nombre."</span> </p> "?> -->
    
    <!--para poner atributo dentro de php se pone con '' por que ""se usaba para variable de php-->
    <!-- <h1><?php echo"$hola"?></h1>
    <h1 <?php echo'class="cursiva"'?>> <?php echo'Esta pagina ha sido programada por'?> </h1>
    <p <?php echo'class="cursiva"'?>> <?php echo"Esta pagina ha sido programada por $nombre "?> </p> -->

    <h1>Hola mundo</h1>
    <p><span class="cursiva"> <?php echo"$contenido"?> </span> <span class="cursiva"; id="negrita"> <?php echo"$nombre"?> </span> </p>
</body>
</html>