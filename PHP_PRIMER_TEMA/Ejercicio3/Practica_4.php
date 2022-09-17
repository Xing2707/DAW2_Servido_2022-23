<?php
    $hola="Hola mundo";
    $nombre="Xing";
    $i="x";
    $cosa="xxx";
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
    </style>
</head>
<body>
    <?php echo"<h1>".$hola." <span class='cursiva'>Esta pagina ha sido programada por ".$nombre."</span> </h1>"; ?>
    
    <!--para poner atributo dentro de php se pone con '' por que ""se usaba para variable de php-->
    <!--<h1><?php echo"$hola"?></h1>
    <h1 <?php echo'class="cursiva"'?>> <?php echo'Esta pagina ha sido programada por'?> </h1>
    <h1 <?php echo'class="cursiva"'?>> <?php echo"$nombre"?> </h1> -->
</body>
</html>